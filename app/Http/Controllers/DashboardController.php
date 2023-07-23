<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Service;
use App\Models\Book_service;

class DashboardController extends Controller
{
    public function index()
    {
        $title="Pets Care - Bảng điều khiển";

        $orders = Order::whereDate('created_at', '=', date('Y-m-d'))->with('user', 'address', 'payment', 'order_detail', 'coupon')->get();
        $order = Order::all();
        $book_service = Book_service::all();
        $user = User::all();
        $revenue_ = Order::where('status', 'COMPLETED')->sum('total');

       // Lấy mảng ngày từ mảng $array_date_order
        $array_date = Order::selectRaw('DATE(created_at) as date')
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get()
        ->pluck('date')
        ->toArray();

        // Lấy mảng doanh thu từ mảng $array_revenue_order
        $array_revenue = Order::selectRaw('SUM(total) as revenue, DATE(created_at) as date')
        ->where('status', 'COMPLETED')
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get()
        ->toArray();

        $array_all_order = Order::selectRaw('COUNT(*) as order_count, DATE(created_at) as date')
        ->groupBy('date')
        ->get()
        ->toArray();

        // Lấy mảng số lượng đơn hàng đã hủy từ mảng $array_canceled_order
        $array_canceled = Order::selectRaw('COUNT(*) as order_count, DATE(created_at) as date')
        ->where('status', 'CANCELED')
        ->groupBy('date')
        ->get()
        ->toArray();

        // Gộp 3 mảng thành một mảng kết quả
        $result = [];
        foreach ($array_date as $date) {
            $date_formatted = date('Y-m-d', strtotime($date));

            $revenue = 0;
            foreach ($array_revenue as $revenue_data) {
                if ($revenue_data['date'] === $date) {
                    $revenue = $revenue_data['revenue'];
                    break;
                }
            }

            $order_canceled_count = 0;
            foreach ($array_canceled as $canceled_data) {
                if ($canceled_data['date'] === $date) {
                    $order_canceled_count = $canceled_data['order_count'];
                    break;
                }
            }

            $order_all_count = 0;
            foreach ($array_all_order as $orders_data) {
                if ($orders_data['date'] === $date) {
                    $order_all_count = $orders_data['order_count'];
                    break;
                }
            }

            $result[] = [
                'date' => $date_formatted,
                'revenue' => $revenue,
                'order_canceled_count' => $order_canceled_count,
                'order_all_count' => $order_all_count,
            ];
        }

        // dd($result);

        $date_array_chart = array_map(function ($result) {
            return date('d/m/Y', strtotime( $result['date']));
        }, $result);

        $revenue_array_chart = array_map(function ($result) {
            return $result['revenue'];
        }, $result);

        $order_canceled_count_array_chart = array_map(function ($result) {
            return $result['order_canceled_count'];
        }, $result);

        $order_all_count_array_chart = array_map(function ($result) {
            return $result['order_all_count'];
        }, $result);


        $date_array_chart = json_encode($date_array_chart);
        $revenue_array_chart = json_encode($revenue_array_chart);
        $order_canceled_count_array_chart = json_encode($order_canceled_count_array_chart);
        $order_all_count_array_chart = json_encode($order_all_count_array_chart);

        $top_10 = Order_detail::selectRaw('product_id, sum(quantity) as total_amount, sum(price) as total_price, avg(price) as avg_price')
            ->whereIn('order_id', function($query) {
                $query->select('id')
                      ->from('orders')
                      ->where('status', 'COMPLETED');
            })
            ->with('product', 'order')
            ->groupBy('product_id')
            ->orderBy('total_amount', 'desc')
            ->limit(10)
            ->get();

        $top_10_service = Book_service::selectRaw('service_id, count(service_id) as total_time ,sum(total_price) as total_price, avg(total_price) as avg_price')
            ->with('service', 'user')
            ->groupBy('service_id')
            ->orderBy('total_price', 'desc')
            ->limit(10)
            ->get(); 

        return view('pages.admin.dashboard', compact(
            'title', 
            'order',
            'user',
            'book_service',
            'revenue_',
            'orders',
            'top_10',
            'top_10_service',
            'date_array_chart',
            'revenue_array_chart',
            'order_canceled_count_array_chart',
            'order_all_count_array_chart'
        ));
    }
}
