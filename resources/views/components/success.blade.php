@if(session()->has("success"))
<div>
    <h1 class="CheckTrueMail">{{session('success')}}</h1>
</div>
@elseif(session()->has("error"))
<div>
    <h1 class="CheckFalseMail">{{session('error')}}</h1>
</div>

@endif