@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Fiches</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>user_id</th>
                    <th scope='col'>name</th>
                    <th scope='col'>class</th>
                    <th scope='col'>level</th>
                    <th scope='col'>background</th>
                    <th scope='col'>race</th>
                    <th scope='col'>alignment</th>
                    <th scope='col'>experience</th>
                    <th scope='col'>strength</th>
                    <th scope='col'>dexterity</th>
                    <th scope='col'>constitution</th>
                    <th scope='col'>intelligence</th>
                    <th scope='col'>wisdom</th>
                    <th scope='col'>charisma</th>
                    <th scope='col'>passive_wisdom</th>
                    <th scope='col'>inspiration</th>
                    <th scope='col'>proficiency</th>
                    <th scope='col'>save_strength</th>
                    <th scope='col'>save_dexterity</th>
                    <th scope='col'>save_constitution</th>
                    <th scope='col'>save_intelligence</th>
                    <th scope='col'>save_wisdom</th>
                    <th scope='col'>save_charisma</th>
                    <th scope='col'>acrobatics</th>
                    <th scope='col'>animal_handling</th>
                    <th scope='col'>arcana</th>
                    <th scope='col'>athletics</th>
                    <th scope='col'>deception</th>
                    <th scope='col'>history</th>
                    <th scope='col'>insight</th>
                    <th scope='col'>intimidation</th>
                    <th scope='col'>investigation</th>
                    <th scope='col'>medicine</th>
                    <th scope='col'>nature</th>
                    <th scope='col'>perception</th>
                    <th scope='col'>performance</th>
                    <th scope='col'>persuasion</th>
                    <th scope='col'>religion</th>
                    <th scope='col'>sleight_of_hand</th>
                    <th scope='col'>stealth</th>
                    <th scope='col'>survival</th>
                    <th scope='col'>armor_class</th>
                    <th scope='col'>initiative</th>
                    <th scope='col'>speed</th>
                    <th scope='col'>current_hitpoints</th>
                    <th scope='col'>temporary_hitpoints</th>
                    <th scope='col'>hit_dice</th>
                    <th scope='col'>personality_traits</th>
                    <th scope='col'>personality_ideals</th>
                    <th scope='col'>personality_bonds</th>
                    <th scope='col'>personality_flaws</th>
                    <th scope='col'>profiencies_languages</th>
                    <th scope='col'>features_traits</th>
                    <th scope='col'>avatar</th>
                    <th scope='col'>spellcasting_class</th>
                    <th scope='col'>spellcasting_ability</th>
                    <th scope='col'>spell_save_dc</th>
                    <th scope='col'>spell_attack_bonus</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($fiches as $fiche)
                    <tr>
                        <th scope='row'>{{ $fiche->id }}</th>
                        <td>{{ $fiche->user_id }}</td>
                        <td>{{ $fiche->name }}</td>
                        <td>{{ $fiche->class }}</td>
                        <td>{{ $fiche->level }}</td>
                        <td>{{ $fiche->background }}</td>
                        <td>{{ $fiche->race }}</td>
                        <td>{{ $fiche->alignment }}</td>
                        <td>{{ $fiche->experience }}</td>
                        <td>{{ $fiche->strength }}</td>
                        <td>{{ $fiche->dexterity }}</td>
                        <td>{{ $fiche->constitution }}</td>
                        <td>{{ $fiche->intelligence }}</td>
                        <td>{{ $fiche->wisdom }}</td>
                        <td>{{ $fiche->charisma }}</td>
                        <td>{{ $fiche->passive_wisdom }}</td>
                        <td>{{ $fiche->inspiration }}</td>
                        <td>{{ $fiche->proficiency }}</td>
                        <td>{{ $fiche->save_strength }}</td>
                        <td>{{ $fiche->save_dexterity }}</td>
                        <td>{{ $fiche->save_constitution }}</td>
                        <td>{{ $fiche->save_intelligence }}</td>
                        <td>{{ $fiche->save_wisdom }}</td>
                        <td>{{ $fiche->save_charisma }}</td>
                        <td>{{ $fiche->acrobatics }}</td>
                        <td>{{ $fiche->animal_handling }}</td>
                        <td>{{ $fiche->arcana }}</td>
                        <td>{{ $fiche->athletics }}</td>
                        <td>{{ $fiche->deception }}</td>
                        <td>{{ $fiche->history }}</td>
                        <td>{{ $fiche->insight }}</td>
                        <td>{{ $fiche->intimidation }}</td>
                        <td>{{ $fiche->investigation }}</td>
                        <td>{{ $fiche->medicine }}</td>
                        <td>{{ $fiche->nature }}</td>
                        <td>{{ $fiche->perception }}</td>
                        <td>{{ $fiche->performance }}</td>
                        <td>{{ $fiche->persuasion }}</td>
                        <td>{{ $fiche->religion }}</td>
                        <td>{{ $fiche->sleight_of_hand }}</td>
                        <td>{{ $fiche->stealth }}</td>
                        <td>{{ $fiche->survival }}</td>
                        <td>{{ $fiche->armor_class }}</td>
                        <td>{{ $fiche->initiative }}</td>
                        <td>{{ $fiche->speed }}</td>
                        <td>{{ $fiche->current_hitpoints }}</td>
                        <td>{{ $fiche->temporary_hitpoints }}</td>
                        <td>{{ $fiche->hit_dice }}</td>
                        <td>{{ $fiche->personality_traits }}</td>
                        <td>{{ $fiche->personality_ideals }}</td>
                        <td>{{ $fiche->personality_bonds }}</td>
                        <td>{{ $fiche->personality_flaws }}</td>
                        <td>{{ $fiche->profiencies_languages }}</td>
                        <td>{{ $fiche->features_traits }}</td>
                        <td>{{ $fiche->avatar }}</td>
                        <td>{{ $fiche->spellcasting_class }}</td>
                        <td>{{ $fiche->spellcasting_ability }}</td>
                        <td>{{ $fiche->spell_save_dc }}</td>
                        <td>{{ $fiche->spell_attack_bonus }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('fiche.edit', $fiche->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('fiche.read', $fiche->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
