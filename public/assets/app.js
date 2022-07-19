function selectColor(c){
    let color = parseInt(c);
    let input = document.getElementById('toBeSelected');
    let selected = parseInt(input.value);
    let temp = document.getElementById('here');
    if (color == 6){
        input.value = 0;
        temp.innerHTML = '';
        return false ;
    }
    if (selected > 1000){
        alert('youve selected 4 colors !');
        return false;
    }
    selected = (selected ? selected : 0 )*10 + color;
    input.value = selected ;
    temp.innerHTML = '';
    let span;
    while(selected>=1) {
        span = document.createElement('span');
        span.classList.add("c-"+parseInt(selected%10));
        temp.appendChild(span);
        selected = selected / 10;
    }

}