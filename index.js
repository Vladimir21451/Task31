function goIter(){
    //alert ('index.js');
    let elems=document.querySelectorAll('meta');
    let entries;

    entries=elems.entries();
    for(let entry of entries){
        console.log(entry);
    }

    entries=elems.entries();
    for(let[num,{name,content}] of entries)
        console.log(num,name,content);
    alert ("Смотрите консоль");
}