@extends('layout.master')

@section('content')

<form method="POST" action="/form" style="padding: 40px">

{{ csrf_field() }}
  Spielname:<br>
  <input type="text" name="name"><br>

  Anleitung:<br>
  <textarea name="instructions"></textarea>
  <br>
<p>Eingabetype 
	 <select name="gametype">
	  <option value="brave">Mut</option>
	  <option value="timeMovement">Bewegung - Zeit</option>
	  <option value="timeSkill"> Geschicklichkeit - Zeit </option>
	  <option value="pointMovement">Bewegung - Punkte</option>
	  <option value="pointSkill" selected> Geschicklichkeit - Punkte </option>
	  <option value="pointQuiz">Quiz</option>
	  <option value="estimate"> Sch&auml;tzen </option>
	</select>
</p>

			<p>		
				Live Ranking <input type="checkbox" value="live"><br/>
				Siegerehrung <input type="checkbox" value="award_cermony"><br/>
				Darf wiederholt werden <input type="checkbox" value="repeatable"><br/>
			</p>
  <button type="submit"> Absenden </button>
</form>



@endsection('')