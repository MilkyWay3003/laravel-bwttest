@extends('layouts.template')

@section('content')

<div class="container">
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Weather</div>
                <div class="panel-body">
                  <br>
                      @foreach ($data as $method)
                  <div align="center" style="color:rgb(14, 87, 182)"><b>{{ $method['method'] }}</b></div>
                    <br>
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th colspan="2">Погода в Запорожье {{ date("d-m-Y") }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Температура воздуха</td>
                          <td> {{ $method['temperature'] }}&deg;C</td>
                        </tr>
                        <tr>
                          <td>Атмосферные явления</td>
                          <td>{{ $method['cloudness'] }}</td>
                        </tr>
                        <tr>
                          <td>Ветер</td>
                          <td>{{ $method['wind'] }} {{ $method['wind_speed'] }} м/c</td>
                        </tr>
                        <tr>
                          <td>Давление</td>
                          <td>{{ $method['pressure'] }} мм рт. ст.</td>
                        </tr>
                        <tr>
                          <td>Влажность</td>
                          <td>{{ $method['humanity'] }}%</td>
                        </tr>
                          <tr>
                          <td>Температура воды</td>
                          <td>{{ $method['temperature_water'] }}&deg;C</td>
                        </tr>
                      </tbody>
                      </table>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection