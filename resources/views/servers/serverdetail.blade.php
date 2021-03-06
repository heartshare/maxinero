@extends('layouts.app')

@section('content')
<div class="container container-fluid">
    <div class="flash-message"></div>
    <h2>{{$server['data']['id']}}</h2>
    <div class="row">
        <div class="table-responsive-sm">
            <br />
            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Address</th>
                        <th>Port</th>
                        <th>Protocol</th>
                        <th>Server Version</th>
                        <th>State</th>
                        <th>Connections</th>
                        <th>Total Connections</th>
                        <th>Persistent Connections</th>
                        <th>Active Operations</th>    
                        <th>Routed Packets</th>              
                    </tr>
                </thead>
                <tbody id="servers-list" name="servers-list">
                    <tr id="server{{$server['data']['id']}}">
                        <td>{{$server['data']['attributes']['parameters']['address']}}</td>
                        <td>{{$server['data']['attributes']['parameters']['port']}}</td>
                        <td>{{$server['data']['attributes']['parameters']['protocol']}}</td>
                        <td>{{$server['data']['attributes']['version_string']}}</td>
                        <td>{{$server['data']['attributes']['state']}}</td>
                        <td>{{$server['data']['attributes']['statistics']['connections']}}</td>
                        <td>{{$server['data']['attributes']['statistics']['total_connections']}}</td>
                        <td>{{$server['data']['attributes']['statistics']['persistent_connections']}}</td>
                        <td>{{$server['data']['attributes']['statistics']['active_operations']}}</td>
                        <td>{{$server['data']['attributes']['statistics']['routed_packets']}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="row">
        <div class="table-responsive-sm">
            <br />
            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Services</th>
                        <th>Monitors</th>
                    </tr>
                </thead>
                <tbody id="servers-list" name="servers-list">
                    <tr id="server{{$server['data']['id']}}">
                        <td>
                            @isset($server['data']['relationships']['services']['data'])
                            @for($y = 0; $y < count($server['data']['relationships']['services']['data']); $y++)
                                <button class="btn btn-primary btn-sm" style="pointer-events: none;" type="button" disabled>{{$server['data']['relationships']['services']['data'][$y]['id']}}</button>
                            @endfor
                            @endisset
                        </td>
                        <td>
                            @isset($server['data']['relationships']['monitors']['data'])
                            @for($y = 0; $y < count($server['data']['relationships']['monitors']['data']); $y++)
                                <button class="btn btn-primary btn-sm" style="pointer-events: none;" type="button" disabled>{{$server['data']['relationships']['monitors']['data'][$y]['id']}}</button>
                            @endfor
                            @endisset
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>

@endsection