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
                <x-input id="name" class="block mt-1 w-full" type="text" name="class" :value="old('class')" required
                    autofocus />
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
            <!-- Spellcasting Bonus -->
            <div class="mt-4">
                <x-label for="spell_attack_bonus" :value="__('Bonus d\'atk aux sorts')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="spell_attack_bonus"
                    :value="old('spell_attack_bonus')" required autofocus />
            </div>
            <!-- Spell DD -->
            <div class="mt-4">
                <x-label for="spell_save_dc" :value="__('DD des sorts')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="spell_save_dc" :value="old('spell_save_dc')"
                    required autofocus />
            </div>
            <!-- Race -->
            <div class="mt-4">
                <x-label for="race" :value="__('Race')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="race" :value="old('race')" required
                    autofocus />
            </div>
            <!-- Level -->
            <div class="mt-4">
                <x-label for="level" :value="__('Niveau')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="level" :value="old('level')" required
                    autofocus />
            </div>
            <!-- Alignement -->
            <div class="mt-4">
                <x-label for="alignment" :value="__('Alignement')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="alignment" :value="old('alignment')" required
                    autofocus />
            </div>
            <!-- Experience -->
            <div class="mt-4">
                <x-label for="experience" :value="__('Experience')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="experience" :value="old('experience')" required
                    autofocus />
            </div>
            <!-- Maitrise -->
            <div class="mt-4">
                <x-label for="proficiency" :value="__('Maitrise')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="proficiency" :value="old('proficiency')" required
                    autofocus />
            </div>
            <!-- Passive Wisdom -->
            <div class="mt-4">
                <x-label for="passive_wisdom" :value="__('Perception Passive')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="passive_wisdom" :value="old('passive_wisdom')"
                    required autofocus />
            </div>
            <!-- Armor Class -->
            <div class="mt-4">
                <x-label for="armor_class" :value="__('Classe d\'armure')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="armor_class" :value="old('armor_class')" required
                    autofocus />
            </div>
            <!-- Initiative -->
            <div class="mt-4">
                <x-label for="initiative" :value="__('Initiative')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="initiative" :value="old('initiative')" required
                    autofocus />
            </div>
            <!-- Vitesse -->
            <div class="mt-4">
                <x-label for="speed" :value="__('Vitesse')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="speed" :value="old('speed')" required
                    autofocus />
            </div>
            <!-- Inspiration -->
            <div class="mt-4">
                <x-label for="inspiration" :value="__('Inspiration')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="inspiration" :value="old('inspiration')" required
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
            <!-- Save -->
            <div class="flex items-center justify-around w-full mt-10">
                {{-- Col1 --}}
                <div class="flex flex-col items-center justify-center w-full">
                    <!-- Force -->
                    <div class="mt-4 w-5/12">
                        <x-label for="save_strength" :value="__('Save Force')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="save_strength" :value="old('save_strength')"
                            required autofocus />
                    </div>
                    <!-- Dexterité -->
                    <div class="mt-4 w-5/12">
                        <x-label for="save_dexterity" :value="__('Save Dextérité')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="save_dexterity"
                            :value="old('save_dexterity')" required autofocus />
                    </div>
                    <!-- Constitution -->
                    <div class="mt-4 w-5/12">
                        <x-label for="save_constitution" :value="__('Save Constitution')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="save_constitution"
                            :value="old('save_constitution')" required autofocus />
                    </div>
                </div>
                {{-- Col2 --}}
                <div class="flex flex-col items-center justify-center w-full">
                    <!-- Intelligence -->
                    <div class="mt-4 w-5/12">
                        <x-label for="save_intelligence" :value="__('Save Intelligence')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="save_intelligence"
                            :value="old('save_intelligence')" required autofocus />
                    </div>
                    <!-- Sagesse -->
                    <div class="mt-4 w-5/12">
                        <x-label for="save_wisdom" :value="__('Save Sagesse')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="save_wisdom" :value="old('save_wisdom')"
                            required autofocus />
                    </div>
                    <!-- Charisme -->
                    <div class="mt-4 w-5/12">
                        <x-label for="save_charisma" :value="__('Save Charisme')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="save_charisma" :value="old('save_charisma')"
                            required autofocus />
                    </div>
                </div>
            </div>
            <!-- Skills -->
            <div class="flex items-center justify-around w-full mt-10">
                {{-- Col1 --}}
                <div class="flex flex-col items-center justify-center w-full">
                    <!-- 1 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="acrobatics" :value="__('Acrobatics')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="acrobatics" :value="old('acrobatics')"
                            required autofocus />
                    </div>
                    <!-- 2 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="animal_handling" :value="__('Animal Handling')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="animal_handling"
                            :value="old('animal_handling')" required autofocus />
                    </div>
                    <!-- 3 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="arcana" :value="__('Arcana')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="arcana" :value="old('arcana')"
                            required autofocus />
                    </div>
                    <!-- 4 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="athletics" :value="__('Athletics')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="athletics" :value="old('athletics')"
                            required autofocus />
                    </div>
                    <!-- 5 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="deception" :value="__('Deception')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="deception" :value="old('deception')"
                            required autofocus />
                    </div>
                    <!-- 6 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="history" :value="__('History')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="history" :value="old('history')"
                            required autofocus />
                    </div>
                    <!-- 7 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="insight" :value="__('Insight')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="insight" :value="old('insight')"
                            required autofocus />
                    </div>
                    <!-- 8 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="intimidation" :value="__('Intimidation')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="intimidation"
                            :value="old('intimidation')" required autofocus />
                    </div>
                    <!-- 9 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="investigation" :value="__('Investigation')" />
                        <x-input id="name" class="block mt-1 w-full" type="number" name="investigation"
                            :value="old('investigation')" required autofocus />
                    </div>
                </div>
                {{-- Col2 --}}
                <div class="flex flex-col items-center justify-center w-full">
                    <!-- 10 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="medicine" :value="__('Medicine')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="medicine" :value="old('medicine')"
                            required autofocus />
                    </div>
                    <!-- 11 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="nature" :value="__('Nature')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="nature" :value="old('nature')"
                            required autofocus />
                    </div>
                    <!-- 12 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="perception" :value="__('Perception')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="perception" :value="old('perception')"
                            required autofocus />
                    </div>
                    <!-- 13 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="performance" :value="__('Performance')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="performance" :value="old('performance')"
                            required autofocus />
                    </div>
                    <!-- 14 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="persuasion" :value="__('Persuasion')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="persuasion" :value="old('persuasion')"
                            required autofocus />
                    </div>
                    <!-- 15 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="religion" :value="__('Religion')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="religion" :value="old('religion')"
                            required autofocus />
                    </div>
                    <!-- 16 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="sleight_of_hand" :value="__('Sleight of Hand')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="sleight_of_hand"
                            :value="old('sleight_of_hand')" required autofocus />
                    </div>
                    <!-- 17 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="stealth" :value="__('Stealth')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="stealth" :value="old('stealth')"
                            required autofocus />
                    </div>
                    <!-- 18 -->
                    <div class="mt-4 w-5/12">
                        <x-label for="survival" :value="__('Survival')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="survival" :value="old('survival')"
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
