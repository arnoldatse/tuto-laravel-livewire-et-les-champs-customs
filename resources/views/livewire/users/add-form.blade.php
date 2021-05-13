<div class="form">
    <div class="form-group">
        <label for="name">Nom</label>
        <input id="name" type="text" wire:model="user.name" class="form-input" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="birthDate">Date de naissance</label>
        <input id="birthDate" type="text" wire:model="user.birthdate" class="form-input" autocomplete="off">
    </div>
    <div class="form-control">
        <button class="form-submit" wire:click="submit">Ajouter</button>
    </div>

    <script>
        function paddingNumber(number) {
            return (number<10) ?  `0${number.toString()}` : number
        }

        jQuery.datetimepicker.setLocale('fr');

        jQuery('#birthDate').datetimepicker({
            timepicker:true,
            format:'d/m/Y H:i',
            onSelectDate:function(ct){
                const date = `${paddingNumber(ct.getDate())}/${paddingNumber(ct.getMonth())}/${paddingNumber(ct.getFullYear())} ${paddingNumber(ct.getHours())}:${paddingNumber(ct.getMinutes())}`
                Livewire.emit('dateUpdated', date)
            },
            onSelectTime:(ct)=>{
                const date = `${paddingNumber(ct.getDate())}/${paddingNumber(ct.getMonth())}/${paddingNumber(ct.getFullYear())} ${paddingNumber(ct.getHours())}:${paddingNumber(ct.getMinutes())}`
                Livewire.emit('dateUpdated', date)
            }
        });
    </script>
</div>
