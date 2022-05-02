@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Fiches</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('fiche.update' , $fiche->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>user_id</label>
                <input type='text' name='user_id' value='{{ $fiche->user_id }}'>
            </div>
            <div>
                <label for=''>name</label>
                <input type='text' name='name' value='{{ $fiche->name }}'>
            </div>
            <div>
                <label for=''>class</label>
                <input type='text' name='class' value='{{ $fiche->class }}'>
            </div>
            <div>
                <label for=''>level</label>
                <input type='text' name='level' value='{{ $fiche->level }}'>
            </div>
            <div>
                <label for=''>background</label>
                <input type='text' name='background' value='{{ $fiche->background }}'>
            </div>
            <div>
                <label for=''>race</label>
                <input type='text' name='race' value='{{ $fiche->race }}'>
            </div>
            <div>
                <label for=''>alignment</label>
                <input type='text' name='alignment' value='{{ $fiche->alignment }}'>
            </div>
            <div>
                <label for=''>experience</label>
                <input type='text' name='experience' value='{{ $fiche->experience }}'>
            </div>
            <div>
                <label for=''>strength</label>
                <input type='text' name='strength' value='{{ $fiche->strength }}'>
            </div>
            <div>
                <label for=''>dexterity</label>
                <input type='text' name='dexterity' value='{{ $fiche->dexterity }}'>
            </div>
            <div>
                <label for=''>constitution</label>
                <input type='text' name='constitution' value='{{ $fiche->constitution }}'>
            </div>
            <div>
                <label for=''>intelligence</label>
                <input type='text' name='intelligence' value='{{ $fiche->intelligence }}'>
            </div>
            <div>
                <label for=''>wisdom</label>
                <input type='text' name='wisdom' value='{{ $fiche->wisdom }}'>
            </div>
            <div>
                <label for=''>charisma</label>
                <input type='text' name='charisma' value='{{ $fiche->charisma }}'>
            </div>
            <div>
                <label for=''>passive_wisdom</label>
                <input type='text' name='passive_wisdom' value='{{ $fiche->passive_wisdom }}'>
            </div>
            <div>
                <label for=''>inspiration</label>
                <input type='text' name='inspiration' value='{{ $fiche->inspiration }}'>
            </div>
            <div>
                <label for=''>proficiency</label>
                <input type='text' name='proficiency' value='{{ $fiche->proficiency }}'>
            </div>
            <div>
                <label for=''>save_strength</label>
                <input type='text' name='save_strength' value='{{ $fiche->save_strength }}'>
            </div>
            <div>
                <label for=''>save_dexterity</label>
                <input type='text' name='save_dexterity' value='{{ $fiche->save_dexterity }}'>
            </div>
            <div>
                <label for=''>save_constitution</label>
                <input type='text' name='save_constitution' value='{{ $fiche->save_constitution }}'>
            </div>
            <div>
                <label for=''>save_intelligence</label>
                <input type='text' name='save_intelligence' value='{{ $fiche->save_intelligence }}'>
            </div>
            <div>
                <label for=''>save_wisdom</label>
                <input type='text' name='save_wisdom' value='{{ $fiche->save_wisdom }}'>
            </div>
            <div>
                <label for=''>save_charisma</label>
                <input type='text' name='save_charisma' value='{{ $fiche->save_charisma }}'>
            </div>
            <div>
                <label for=''>acrobatics</label>
                <input type='text' name='acrobatics' value='{{ $fiche->acrobatics }}'>
            </div>
            <div>
                <label for=''>animal_handling</label>
                <input type='text' name='animal_handling' value='{{ $fiche->animal_handling }}'>
            </div>
            <div>
                <label for=''>arcana</label>
                <input type='text' name='arcana' value='{{ $fiche->arcana }}'>
            </div>
            <div>
                <label for=''>athletics</label>
                <input type='text' name='athletics' value='{{ $fiche->athletics }}'>
            </div>
            <div>
                <label for=''>deception</label>
                <input type='text' name='deception' value='{{ $fiche->deception }}'>
            </div>
            <div>
                <label for=''>history</label>
                <input type='text' name='history' value='{{ $fiche->history }}'>
            </div>
            <div>
                <label for=''>insight</label>
                <input type='text' name='insight' value='{{ $fiche->insight }}'>
            </div>
            <div>
                <label for=''>intimidation</label>
                <input type='text' name='intimidation' value='{{ $fiche->intimidation }}'>
            </div>
            <div>
                <label for=''>investigation</label>
                <input type='text' name='investigation' value='{{ $fiche->investigation }}'>
            </div>
            <div>
                <label for=''>medicine</label>
                <input type='text' name='medicine' value='{{ $fiche->medicine }}'>
            </div>
            <div>
                <label for=''>nature</label>
                <input type='text' name='nature' value='{{ $fiche->nature }}'>
            </div>
            <div>
                <label for=''>perception</label>
                <input type='text' name='perception' value='{{ $fiche->perception }}'>
            </div>
            <div>
                <label for=''>performance</label>
                <input type='text' name='performance' value='{{ $fiche->performance }}'>
            </div>
            <div>
                <label for=''>persuasion</label>
                <input type='text' name='persuasion' value='{{ $fiche->persuasion }}'>
            </div>
            <div>
                <label for=''>religion</label>
                <input type='text' name='religion' value='{{ $fiche->religion }}'>
            </div>
            <div>
                <label for=''>sleight_of_hand</label>
                <input type='text' name='sleight_of_hand' value='{{ $fiche->sleight_of_hand }}'>
            </div>
            <div>
                <label for=''>stealth</label>
                <input type='text' name='stealth' value='{{ $fiche->stealth }}'>
            </div>
            <div>
                <label for=''>survival</label>
                <input type='text' name='survival' value='{{ $fiche->survival }}'>
            </div>
            <div>
                <label for=''>armor_class</label>
                <input type='text' name='armor_class' value='{{ $fiche->armor_class }}'>
            </div>
            <div>
                <label for=''>initiative</label>
                <input type='text' name='initiative' value='{{ $fiche->initiative }}'>
            </div>
            <div>
                <label for=''>speed</label>
                <input type='text' name='speed' value='{{ $fiche->speed }}'>
            </div>
            <div>
                <label for=''>current_hitpoints</label>
                <input type='text' name='current_hitpoints' value='{{ $fiche->current_hitpoints }}'>
            </div>
            <div>
                <label for=''>temporary_hitpoints</label>
                <input type='text' name='temporary_hitpoints' value='{{ $fiche->temporary_hitpoints }}'>
            </div>
            <div>
                <label for=''>hit_dice</label>
                <input type='text' name='hit_dice' value='{{ $fiche->hit_dice }}'>
            </div>
            <div>
                <label for=''>personality_traits</label>
                <input type='text' name='personality_traits' value='{{ $fiche->personality_traits }}'>
            </div>
            <div>
                <label for=''>personality_ideals</label>
                <input type='text' name='personality_ideals' value='{{ $fiche->personality_ideals }}'>
            </div>
            <div>
                <label for=''>personality_bonds</label>
                <input type='text' name='personality_bonds' value='{{ $fiche->personality_bonds }}'>
            </div>
            <div>
                <label for=''>personality_flaws</label>
                <input type='text' name='personality_flaws' value='{{ $fiche->personality_flaws }}'>
            </div>
            <div>
                <label for=''>profiencies_languages</label>
                <input type='text' name='profiencies_languages' value='{{ $fiche->profiencies_languages }}'>
            </div>
            <div>
                <label for=''>features_traits</label>
                <input type='text' name='features_traits' value='{{ $fiche->features_traits }}'>
            </div>
            <div>
                <label for=''>avatar</label>
                <input type='text' name='avatar' value='{{ $fiche->avatar }}'>
            </div>
            <div>
                <label for=''>spellcasting_class</label>
                <input type='text' name='spellcasting_class' value='{{ $fiche->spellcasting_class }}'>
            </div>
            <div>
                <label for=''>spellcasting_ability</label>
                <input type='text' name='spellcasting_ability' value='{{ $fiche->spellcasting_ability }}'>
            </div>
            <div>
                <label for=''>spell_save_dc</label>
                <input type='text' name='spell_save_dc' value='{{ $fiche->spell_save_dc }}'>
            </div>
            <div>
                <label for=''>spell_attack_bonus</label>
                <input type='text' name='spell_attack_bonus' value='{{ $fiche->spell_attack_bonus }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
