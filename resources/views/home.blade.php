@include('base.htmlHead')
@include('base.publicHeader')

<div style=" position: relative;">
    <img src="https://ec.europa.eu/eurostat/cache/infographs/elderly/imgs/slide-1/people-wide.jpg" alt="oldies"
         style="max-width: 100%; filter: opacity(var(--value, 100%)); --value:80%;">
    <div style="position: absolute;   bottom: 20px;
  right: 20px;  background-color: #631da3;filter: opacity(var(--value, 100%)); --value:90%;  color: white;
  padding-left: 20px;  padding-right: 20px;">
        <h1>Better tomorrow with ElderCare</h1>
    </div>
    <div class="btn-group" style="position: absolute;   bottom: 20px;
  left: 20px; color: white;
  padding-left: 20px;  padding-right: 20px;">
        <a type="button" href="/login" class="btn btn-primary btn-lg rounded-0" style="margin-right: 20px;">Login</a>
        <a type="button" href="/register" class="btn btn-primary btn-lg rounded-0">Register</a>
    </div>
</div>
<img src="https://i.imgflip.com/2bqsgi.jpg" alt="old"
     style="max-width: 100%; filter: opacity(var(--value, 100%)); --value:80%;">

@include('base.htmlFoot')
