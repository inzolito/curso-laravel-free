@if (session("mensaje"))

<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i>TheFinis</h5>
        <ul>
                 <li>{{  session("mensaje") }}</li>

        </ul>

    </div>
@endif
