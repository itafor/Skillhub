@if(session()->has('errors') )
        <div class="alert alert-dismissible alert-danger" style="margin-bottom:-50px;margin-top:50px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">x</button>
               <span aria-hidden="true">&times;</span>
            <strong>
        {!!session()->get('errors')!!}
    </strong>
</div>
@endif