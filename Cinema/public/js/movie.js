//sections transtion
let section_3 = document.getElementById("section_3");
let section_4 = document.getElementById("section_4");
let section_5 = document.getElementById("section_5");
let section_6 = document.getElementById("section_6");
let next_1 = document.getElementById("next_1");
let next_2 = document.getElementById("next_2");



next_1.onclick =  function() {
    section_3.style.display = "flex";
    window.scrollTo({
        left:0,
        top: 2000,
        behavior: "smooth",
    });
};
next_2.onclick =  function() {
    section_6.style.display = "flex";
    window.scrollTo({
        left:0,
        top: 2200,
        behavior: "smooth",
    });



    ticket_num = ''
    for (let i = 0; i < ticket_n; i++) {
        ticket_num +=`

        <p >${arr_seats[i]}, </p>

        `
        console.log(arr_seats[i])
    }
    document.getElementById("ticket_num").innerHTML = ticket_num;


    
};


// crud
// data collection


let submit = document.getElementById("button");


   
function select_cinema() {
    let cinema = document.getElementById("cinema").value;
    
    console.log(cinema);
}
function select_Date() {
    let date = document.getElementById("date").value;
    
    console.log(date);
}
function select_Time() {
    let Time = document.getElementById("Time").value;
    
    console.log(Time);
}
function select_Screen() {
    let screen = document.getElementById("screen").value;
    
    console.log(screen);
}




    
    submit.onclick = function(){
    
        select_cinema();
        select_Date();
        select_Time();
        select_Screen();
        let new_info1 = {
            cinema: cinema.value,
            date: date.value,
            Time: Time.value,
            screen: screen.value
        }
        console.log(new_info1);
        let cinema_name = document.getElementById("cinema_name");
        let show_date = document.getElementById("show_date");
        console.log(cinema_name);
        cinema_name.innerHTML = `${new_info1.cinema}`;
        show_date.innerHTML = `${new_info1.date} <br> ${new_info1.Time}`;
        window.scrollTo({
            left:0,
            top: 2000,
            behavior: "smooth",
        });
    }









    let arr_letter = ["A", "B", "C","D", "E","F","G","H"]
    let arr_letter2 = ["A", "B", "C","D", "E","F","G","H"]
    let arr_letter3 = ["A", "B", "C","D", "E","F","G","H"]


    let arr_seats = [];
    let arr_seats2 = [];
    let arr_seats3 = [];

    let letter = document.getElementById("letter");
    let letter2 = document.getElementById("letter2");
    let letter3 = document.getElementById("letter3");


    letter = '';
    for (let i = 0; i < 8; i++) {
        
        
        letter +=`
        
        <div class="letter">${arr_letter[i]}</div>
            
        
        `   
    }
    
    document.getElementById("letter").innerHTML = letter;







    //0000000000000000000000000000000


    letter2 = '';
    for (let i = 0; i < 8; i++) {
        
        
        letter2 +=`
        
        <div class="letter2">${arr_letter2[i]}</div>
            
        
        `   
    }
    
    document.getElementById("letter2").innerHTML = letter2;

    //00000000000000000000000000000000



    letter3 = '';
    for (let i = 0; i < 8; i++) {
        
        
        letter3 +=`
        
        <div class="letter3">${arr_letter3[i]}</div>
            
        
        `   
    }
    
    document.getElementById("letter3").innerHTML = letter3;
    

    

    let set = document.getElementById("set");
    let set2 = document.getElementById("set2");
    let set3 = document.getElementById("set3");



    set = '';

    for (let i = 0; i < 56; i++) {

        
        
        
        
        set +=`
            <div onclick="btn1(l${i})" id="l${i}">L${i+1}</div>    
        `
        let id = `L${i+1}`
        
        // arr_seats.push(id);

    

    }
    
    document.getElementById("set").innerHTML = set;

    //00000000000000000000000000

    set2 = '';

    for (let i = 0; i < 56; i++) {

        
        
        
        
        set2 +=`
            <div onclick="btn2(m${i+1})" id="m${i+1}">M${i+1}</div>    
        `
        let id = `M${i+1}`
        
        arr_seats2.push(id);

    }
    
    document.getElementById("set2").innerHTML = set2;

    //000000000000000000000000000

    set3 = '';

    for (let i = 0; i < 56; i++) {

        
        
        
        
        set3 +=`
            <div onclick="btn3(r${i+1})" id="r${i+1}">R${i+1}</div>    
        `
        let id = `R${i+1}`
        
        arr_seats3.push(id);

    }
    

    document.getElementById("set3").innerHTML = set3;


    

    // console.log(arr_seats)
    // console.log(arr_seats2)
    // console.log(arr_seats3)

    

    
    let total = document.getElementById("total");
    

    let ticket_n = 0;
    let numOfClick = 0;


    
        // let hh = document.getElementById("L1");
        // console.log("hh")
        
        // console.log(arr_seats[i])
        function btn1(id){
        
            numOfClick++;
            
            
                    id.style.background = "#16222A";
                    id.style.color = "white";
                    ticket_n++;
                    
                    tickets_nums.innerHTML = `${ticket_n} Ticket <br>2D`;
                    ticket_nuum.innerHTML = `<span>Tickets &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span> ${ticket_n}`;
                    total.innerHTML = `${ticket_n * 130 } EGP`
                    let puush = id.innerHTML;
                    arr_seats.push(puush);
                    console.log(id.innerHTML);
                
            
        }
        


    // let ticket_show = document.getElementById("ticket_show");
    // console.log(ticket_show)

    