script src="{{ asset('materialize/js/materialize.js') }}" ></script>
<script>
function showProgress(){
    var elem = document.getElementById('modal-wait');
    M.Modal.init(elem, {
        'dismissible' : false,
        'opacity' : 0.2
    });
    var instance = M.Modal.getInstance(elem);
    instance.open();
}
</script>
