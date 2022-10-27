<x-guest-layout class="relative">
    <img class="absolute dragon2L w-3/5 mix-blend-soft-light" src="{{ asset('img/dragonL.png') }}" alt="">
    <img class="absolute dragon2R w-3/5 mix-blend-soft-light" src="{{ asset('img/dragonR.png') }}" alt="">
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-white" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form enctype="multipart/form-data" class="w-full px-5" method="POST" action="{{ route('register') }}">
            @csrf
            <h2 class="uppercase text-white font-bold text-3xl tracking-widest text-center m-10">User</h2>
            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            {{-- FICHE PERSO --}}
            <h2 class="uppercase text-white font-bold text-3xl tracking-widest text-center m-10">Fiche perso</h2>
            <!-- Name -->
            <div class="mt-4">
                <x-label for="namePerso" :value="__('Nom du perso')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="namePerso" :value="old('namePerso')" required
                    autofocus />
            </div>
            <!-- Avatar -->
            <div class="mt-4">
                <x-label for="avatar" :value="__('Choisissez un avatar')" />
                <x-input id="name" class="block mt-1 w-full text-white bg-black" type="file" name="avatar" :value="old('avatar')"
                    required autofocus />
            </div>
            <!-- Background -->
            <div class="mt-4">
                <x-label for="background" :value="__('Historique')" />
                    <select name='background' class="" aria-label="Default select example">
                        @foreach ($backgrounds as $background)
                            <option value="{{ $background->id }}">{{ $background->backgroundName }}</option>
                        @endforeach
                    </select>
            </div>
            <!-- Class -->
            <div class="mt-4">
                <x-label for="class" :value="__('Classe')" />
                    <select name='class' class="" aria-label="Default select example">
                        @foreach ($classes as $classe)
                            <option value="{{ $classe->id }}">{{ $classe->className }}</option>
                        @endforeach
                    </select>
            </div>
            <!-- Race -->
            <div class="mt-4">
                <x-label for="race" :value="__('Race')" />
                    <select name='race' class="" aria-label="Default select example">
                        @foreach ($races as $race)
                            <option value="{{ $race->id }}">{{ $race->race }}</option>
                        @endforeach
                    </select>
            </div>
            <!-- Spellcasting Class -->
            <div class="mt-4">
                <x-label for="spellcasting_class" :value="__('Jeteur de sorts')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="spellcasting_class" :value="old('spellcasting_class')"
                    required autofocus />
            </div>
            <!-- Spellcasting Ability -->
            <div class="mt-4">
                <x-label for="spellcasting_ability" :value="__('Caract. d\'incantation')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="spellcasting_ability" :value="old('spellcasting_ability')"
                    required autofocus />
            </div>
            <!-- Alignement -->
            <div class="mt-4">
                <x-label for="alignment" :value="__('Alignement')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="alignment" :value="old('alignment')" required
                    autofocus />
            </div>
            <!-- Armor Class -->
            <div class="mt-4">
                <x-label for="armor_class" :value="__('Classe d\'armure')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="armor_class" :value="old('armor_class')" required
                    autofocus />
            </div>
            {{-- life --}}
            <div class="flex justify-around items-center my-10">
                <div class="flex flex-col items-center justify-center">
                    <x-label for="current_hitpoints" :value="__('PV')" />
                    <x-input id="name" class="ml-5 block mt-1 w-full" type="text" name="current_hitpoints"
                        :value="old('current_hitpoints')" required autofocus />
                </div>
                <div class="flex flex-col items-center justify-center">
                    <x-label for="temporary_hitpoints" :value="__('PV temporaires')" />
                    <x-input id="name" class="ml-5 block mt-1 w-full" type="text" name="temporary_hitpoints"
                        :value="old('temporary_hitpoints')" required autofocus />
                </div>
                <div class="flex flex-col items-center justify-center">
                    <x-label for="hit_dice" :value="__('Dés de vie')" />
                    <x-input id="name" class="ml-5 block mt-1 w-full" type="text" name="hit_dice" :value="old('hit_dice')"
                        required autofocus />
                </div>
            </div>
            <!-- Caract -->
            <div class="flex items-center justify-around w-full mt-10">
                {{-- Col1 --}}
                <div class="flex flex-col items-center justify-center w-full">
                    <!-- Force -->
                    <div class="mt-4 w-5/12">
                        <x-label for="strength" :value="__('Force')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="strength" :value="old('strength')"
                            required autofocus />
                    </div>
                    <!-- Dexterité -->
                    <div class="mt-4 w-5/12">
                        <x-label for="dexterity" :value="__('Dextérité')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="dexterity" :value="old('dexterity')"
                            required autofocus />
                    </div>
                    <!-- Constitution -->
                    <div class="mt-4 w-5/12">
                        <x-label for="constitution" :value="__('Constitution')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="constitution" :value="old('constitution')"
                            required autofocus />
                    </div>
                </div>
                {{-- Col2 --}}
                <div class="flex flex-col items-center justify-center w-full">
                    <!-- Intelligence -->
                    <div class="mt-4 w-5/12">
                        <x-label for="intelligence" :value="__('Intelligence')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="intelligence" :value="old('intelligence')"
                            required autofocus />
                    </div>
                    <!-- Sagesse -->
                    <div class="mt-4 w-5/12">
                        <x-label for="wisdom" :value="__('Sagesse')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="wisdom" :value="old('wisdom')"
                            required autofocus />
                    </div>
                    <!-- Charisme -->
                    <div class="mt-4 w-5/12">
                        <x-label for="charisma" :value="__('Charisme')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="charisma" :value="old('charisma')"
                            required autofocus />
                    </div>
                </div>
            </div>
            <!-- Traits de personnalité -->
            <div class="mt-10">
                <div class="mt-4">
                    <x-label for="personality_traits" :value="__('Traits de personnalité')" />
                    <textarea id="name" class="block mt-1 w-full rounded" type="text" name="personality_traits"
                        :value="old('personality_traits')" required autofocus /></textarea>
                </div>
                <!-- Idéaux -->
                <div class="mt-4">
                    <x-label for="personality_ideals" :value="__('Idéaux')" />
                    <textarea id="name" class="block mt-1 w-full rounded" type="text" name="personality_ideals"
                        :value="old('personality_ideals')" required autofocus /></textarea>
                </div>
                <!-- Liens -->
                <div class="mt-4">
                    <x-label for="personality_bonds" :value="__('Liens')" />
                    <textarea id="name" class="block mt-1 w-full rounded" type="text" name="personality_bonds"
                        :value="old('personality_bonds')" required autofocus /></textarea>
                </div>
                <!-- Défauts -->
                <div class="mt-4">
                    <x-label for="personality_flaws" :value="__('Défauts')" />
                    <textarea id="name" class="block mt-1 w-full rounded" type="text" name="personality_flaws"
                        :value="old('personality_flaws')" required autofocus /></textarea>
                </div>
                <!-- Inventaire -->
                <div class="mt-4">
                    <x-label for="inventory" :value="__('Inventaire')" />
                    <textarea id="name" class="block mt-1 w-full rounded" type="text" name="inventory" :value="old('inventory')" required
                        autofocus /></textarea>
                </div>
                <!-- Maitrise et languages -->
                <div class="mt-4">
                    <x-label for="profiencies_languages" :value="__('Maitrise et languages')" />
                    <textarea id="name" class="block mt-1 w-full rounded" type="text" name="profiencies_languages" :value="old('profiencies_languages')" required
                        autofocus /></textarea>
                </div>
                <!-- Features_Traits -->
                <div class="mt-4">
                    <x-label for="features_traits" :value="__('Autres')" />
                    <textarea id="name" class="block mt-1 w-full rounded" type="text" name="features_traits" :value="old('features_traits')" required
                        autofocus /></textarea>
                </div>
                {{-- COINS --}}
                <div class="flex items-center justify-around w-full mt-10">
                    <div class="flex flex-col items-center justify-center w-1/4">
                        <x-label for="platinum_coins" :value="__('PP')" />
                        <x-input id="name" class="block mt-1 w-4/5" type="text" name="platinum_coins" :value="old('platinum_coins')"
                            required autofocus />
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/4">
                        <x-label for="gold_coins" :value="__('PO')" />
                        <x-input id="name" class="block mt-1 w-4/5" type="text" name="gold_coins" :value="old('gold_coins')"
                            required autofocus />
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/4">
                        <x-label for="silver_coins" :value="__('PA')" />
                        <x-input id="name" class="block mt-1 w-4/5" type="text" name="silver_coins" :value="old('silver_coins')"
                            required autofocus />
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/4">
                        <x-label for="copper_coins" :value="__('PC')" />
                        <x-input id="name" class="block mt-1 w-4/5" type="text" name="copper_coins" :value="old('copper_coins')"
                            required autofocus />
                    </div>
                </div>
                {{-- ARME --}}
                <div class="flex items-center justify-around w-full mt-10">
                    <div class="flex flex-col items-center justify-center w-1/4">
                        <x-label for="weapon1" :value="__('Arme')" />
                        <x-input id="name" class="block mt-1 w-4/5" type="text" name="weapon1" :value="old('weapon1')"
                            required autofocus />
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/4">
                        <x-label for="bonus_attack1" :value="__('bonus ATK')" />
                        <x-input id="name" class="block mt-1 w-4/5" type="text" name="bonus_attack1" :value="old('bonus_attack1')"
                            required autofocus />
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/4">
                        <x-label for="bonus_damage1" :value="__('bonus DMG')" />
                        <x-input id="name" class="block mt-1 w-4/5" type="text" name="bonus_damage1" :value="old('bonus_damage1')"
                            required autofocus />
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/4">
                        <x-label for="type_damage1" :value="__('Type DMG')" />
                        <x-input id="name" class="block mt-1 w-4/5" type="text" name="type_damage1" :value="old('type_damage1')"
                            required autofocus />
                    </div>
                </div>
            </div>




            <div class="flex items-center justify-end mt-10">
                <a class="underline text-sm text-white" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
