@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('datetimepicker-master/jquery.datetimepicker.css')}}" />
@endsection

@section('scripts')
    <script src="{{asset('datetimepicker-master/jquery.js')}}"></script>
    <script src="{{asset('datetimepicker-master/build/jquery.datetimepicker.full.min.js')}}"></script>
@endsection

@section('title', "Utilisasteurs")

<div>
    <div class="container">
        @livewire('users.add-form')
        <div class="tableContainer">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Date de naissance</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>
                                @if($user->birthDate)
                                    @php
                                        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->birthDate)
                                    @endphp
                                    {{$date->format('d/m/Y H:i')}}
                                    @else
                                    N/A
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
