const keys_1 = document.querySelectorAll('.pricing-comparison__data--item__figure-1');
const chart_1 = document.querySelectorAll('.donut-1-segment');
const graph_1 = document.querySelector('.donut-1-percent');


const keys_2 = document.querySelectorAll('.pricing-comparison__data--item__figure-2');
const chart_2 = document.querySelectorAll('.donut-2-segment');
const graph_2 = document.querySelector('.donut-2-percent');


const remove_animations_1 = () => {
    chart_1.forEach((segment, index) => {
        segment.classList.remove(`chart-1-animation-${index + 1}`)
    })
    graph_1.style.animation = "none";
}
const remove_animations_2 = () => {
    chart_2.forEach((segment, index) => {
        segment.classList.remove(`chart-2-animation-${index + 1}`)
    })
    graph_2.style.animation = "none";
}


keys_1.forEach(key => {   
    key.addEventListener('mouseenter', () => {
        remove_animations_1();
        keys_1.forEach((ele, index) => {
            if(ele !== key){
                ele.style.opacity = 0.5;
                chart_1[index].style.opacity = 0;
            } else {              
                chart_1[index].classList.add(`chart-1-animation-${index + 1}`);               
            }
            graph_1.textContent = key.children[2].innerText;
            graph_1.style.animation = "donutfadelong 1.5s";
        })
    })
    key.addEventListener('mouseleave', () => {
        remove_animations_1();
        keys_1.forEach(ele => ele.style.opacity = 1)
        chart_1.forEach(ele => ele.style.opacity = 1)
        graph_1.textContent = "£62,800"
    })
})

keys_2.forEach(key => {  
    key.addEventListener('mouseenter', () => {
        remove_animations_2();
        keys_2.forEach((ele, index) => {
            if(ele !== key){
                ele.style.opacity = 0.5;
                chart_2[index].style.opacity = 0;
            } else {              
                chart_2[index].classList.add(`chart-2-animation-${index + 1}`);               
            }
            graph_2.textContent = key.children[2].innerText;
            graph_2.style.animation = "donutfadelong 1.5s";
        })
    })
    key.addEventListener('mouseleave', () => {
        remove_animations_2();
        keys_2.forEach(ele => ele.style.opacity = 1)
        chart_2.forEach(ele => ele.style.opacity = 1)
        graph_2.textContent = "£36,580"
    })
})



///////

// const nav = document.querySelector('.nav');

// function fixNav(){
//     if(window.scrollY >= 1000){
//         console.log("YESSS");
//     } else {
//         console.log("NOOOOO");
//     }
// }

// window.addEventListener('scroll', fixNav);


