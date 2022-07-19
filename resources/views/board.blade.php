<!DOCTYPE html>
<html>
<head>
    <title>board</title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
<form action="{{route('game.move')}}" method="POST">
    <input type="hidden" name="game_id" value="{{$game_id}}">
    @csrf
    <div>
        <input id="toBeSelected" type="hidden" name="colors">
        <div id="here"></div>
        @forelse($moves as $move)
            <?php
            $move = intval($move->colors);
            while ($moves >= 1){
                    $thisMove[] = $move%1;
                    $move/=10;
                }
            ?>
            <div>
                @foreach($thisMove as $c)
                    <span class="c-{{$c}}"></span>
                @endforeach
            </div>
        @empty
        @endforelse
    </div>
    <section>
        <span class="c-1" onclick="selectColor(1)"></span>
        <span class="c-2" onclick="selectColor(2)"></span>
        <span class="c-3" onclick="selectColor(3)"></span>
        <span class="c-4" onclick="selectColor(4)"></span>
        <span class="c-5" onclick="selectColor(5)"></span>
        <span class="c-reset" onclick="selectColor('')">reset</span>
        <button type="submit" name="submit">enter</button>
    </section>
</form>
<script src="/assets/app.js"></script>
</body>
</html>