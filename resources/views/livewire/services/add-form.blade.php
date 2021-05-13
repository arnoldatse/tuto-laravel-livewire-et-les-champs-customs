<div class="form">
    <div class="form-group">
        <label for="name">Nom</label>
        <input id="name" type="text" wire:model="service.name" class="form-input" autocomplete="off">
    </div>
    <div id="autocomplate-user" class="form-group autocomplate">
        <label for="username">Responsable</label>
        <input id="username" type="text" wire:click="getRecommendations" wire:keyup="getRecommendations" wire:model="labelUser" class="form-input" autocomplete="off">
        @if($showRecommendations)
            <ul class="autocomplate-list">
                @if($listRecommendations->count()<=0)
                    <li class="no-result">Aucun résultat</li>
                    @else
                    @foreach($listRecommendations as $recommendation)
                        <li wire:click="selectUser({{$recommendation['id']}})">{{$recommendation->name}}</li>
                    @endforeach
                @endif
            </ul>
        @endif
    </div>
    <div class="form-control">
        <button class="form-submit" wire:click="submit">Ajouter</button>
    </div>

    <script>
        window.addEventListener('click', (e)=>{
            if(!document.getElementById("autocomplate-user").contains(e.target)){
                Livewire.emit('hideRecommendations')
            }
        })
    </script>
</div>
