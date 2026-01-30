let deleteUrl = '';

function confirmDelete(url) {
    deleteUrl = url;
    document.getElementById('confirmModal').style.display = 'flex';
}

function closeConfirm() {
    document.getElementById('confirmModal').style.display = 'none';
    deleteUrl = '';
}

document.getElementById('btnYes').addEventListener('click', function() {
    if (deleteUrl) {
        window.locationhref = deleteUrl;
    }
})