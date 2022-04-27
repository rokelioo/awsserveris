@include('base.htmlHead')
@include('base.header')
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
{{--    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--        <span aria-hidden="true">&times;</span>--}}
{{--    </button>--}}
</div>
@endif
@foreach ($elders as $elder)
    <table class="table table-secondary table-borderless"
           style="  border: 1.5px solid black; border-collapse: collapse; width: 90%; margin: 2% auto;">
        <tbody>
        <tr>
            <td style="width:80%"><h2>{{ ucfirst($elder->name) }} {{ ucfirst($elder->surname) }}</h2></td>
            <td rowspan="3" style="vertical-align: middle">
                <a class="btn btn-danger rounded-pill" href="emergency-call" style="margin:auto; display:inline-block;">EMERGENCY CALL</a>
            </td>
        </tr>
        <tr>
            <td>Current location: <b><u>Living Room</u></b></td>
        </tr>
        <tr>
            <td>Battery health: <b style="color: green">90%</b></td>
        </tr>
        </tbody>
    </table>
@endforeach

@include('base.htmlFoot')

