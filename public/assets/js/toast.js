window.addEventListener("DOMContentLoaded", (e) => {
	let headLinks = document.querySelector("head");
	let containerNotifications = document.createElement("div");
	containerNotifications.id = "toasts";
	
	document.body.appendChild(containerNotifications);
});

let configIcons = {
	valid: 'fa-circle-check',
	error: 'fa-circle-exclamation',
    warring: 'fa-triangle-exclamation'
}
const toastNotif = (setting) => {
	let notifs = document.getElementById("toasts");
	let toast = document.createElement("div");
	toast.style.backgroundColor = setting.color;
	toast.classList.add('toast', 'toast-show');
	icon = document.createElement("i");
	icon.classList.add('fa-solid', configIcons[setting.icon]);

	let text = document.createElement("p");
	text.appendChild( document.createTextNode(setting.text) );

	let close = document.createElement("i");
	close.classList.add('fa-solid', "fa-xmark", "toast-close");

	toast.appendChild(icon);
	toast.appendChild(text);
	toast.appendChild(close);
	notifs.appendChild(toast);

	setTimeout(() => {
		toast.classList.remove('toast-show')
		toast.classList.add('toast-hide')
		setTimeout(() => {
			toast.remove()
		}, 300)
	}, setting.timeout);

	close.addEventListener("click", (e) => {
		toast.classList.remove('toast-show')
		toast.classList.add('toast-hide')
		setTimeout(() => {
			toast.remove()
		}, 300)
	});
}