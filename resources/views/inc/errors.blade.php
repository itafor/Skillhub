@if(session()->has('errors') )
<h1>TESING</h1>
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">x</button>
               <span aria-hidden="true">&times;</span>
            <strong>
        {!!session()->get('errors')!!}
    </strong>
</div>
@endif