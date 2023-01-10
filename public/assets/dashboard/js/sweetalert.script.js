window.addEventListener('swal:confirm',event => {
    swal({
        title: event.detail.message,
        text: event.detail.text,
        icon: event.detail.type,
        buttons: true,
        dangerMode: true,
    }).then((willDelete) =>{
        if(willDelete){
            window.livewire.emit('delete',event.detail.id)
        }
    });
});
window.addEventListener('swal:done',event => {
    swal({
        title: event.detail.message,
        text: event.detail.text,
        icon: event.detail.type,
    });
});
