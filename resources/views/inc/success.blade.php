@if(session()->has('success') )
        <div class="alert alert-dismissible  alert-success">
            <button   type="button" class="close" data-dismiss="alert">x</button>
               <span aria-hidden="true">&times;</span>
            <strong>
        {!!session()->get('success')!!}
    </strong>
</div>
@endif