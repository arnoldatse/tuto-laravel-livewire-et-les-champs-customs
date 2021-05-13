@section('title', "Services")

<div>
    <div class="container">
        @livewire('services.add-form')
        <div class="tableContainer">
            <table class="table">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Responsable</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>
                            @if($service->manager)
                            {{$service->manager->name}}
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
