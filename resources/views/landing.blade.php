<!DOCTYPE html>
<html>
<head>
    <title>fekr</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
<form action="{{route('game.enter')}}" method="POST">
    @csrf
    <input type="text" name="game_id" placeholder="game_id">
    <button type="submit" name="submit">enter</button>
</form>
<br><br>
<form action="{{route('game.create')}}" method="POST">
    @csrf
    <div>
        <input id="toBeSelected" type="hidden" name="colors">
        <span for="toBeSelected" onclick="chooseColor('colors')">Select colors</span>
        <div id="here"></div>
    </div>
    <button type="submit" name="submit">enter</button>
    <section>
        <span class="c-1" onclick="selectColor(1)"></span>
        <span class="c-2" onclick="selectColor(2)"></span>
        <span class="c-3" onclick="selectColor(3)"></span>
        <span class="c-4" onclick="selectColor(4)"></span>
        <span class="c-5" onclick="selectColor(5)"></span>
        <span class="c-reset" onclick="selectColor('')">reset</span>
    </section>
</form>
<script src="/assets/app.js"></script>
</body>
</html>