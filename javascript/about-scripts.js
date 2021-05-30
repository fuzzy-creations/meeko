const header = document.querySelector('.about-ukraine__box--content__header');
const paragraph = document.querySelector('.about-ukraine__box--content__text');


const content = document.querySelectorAll('.about-ukraine__box--content');
console.log(content)


////////////////

const boxes = document.querySelectorAll('.about-ukraine__box--headers__item');
boxes.forEach((box, index, array) => box.addEventListener('click', () => {   

    content.forEach((block, i) => {
        if(i === index){
            console.log(block)
            block.style.display = "block";
        } else {
            block.style.display = "none";
        }
    })

    

    array.forEach((ele, i) => {
        if(i === index){
            ele.classList.add('about-ukraine__box--headers__item-active');
            
        } else {
            ele.classList.remove('about-ukraine__box--headers__item-active');
        }
    })
}))

//////////////////


    // if(index === 0){
    //     header.textContent = "Ukraine’s thriving tech and start-up scene"
    //     paragraph.textContent = "Ukrainian millennial tech entrepreneurs are branching out and launching their own startups, developing new products and bringing unusual and innovative ideas to life. Most of these companies are keeping the R&D operations in Ukraine but selling into Western Europe and beyond, there are in fact over 100 R&D centers of major global companies are based in Ukraine for some well knows tech giants like Samsung, Magento, and SysIQ."
    // } else if(index === 1){
    //     header.textContent = "The Time Zone"
    //     paragraph.textContent = "The difference in time between London and Kiev is only 2 hours in both summer and winter, and the benefit of having someone in Ukraine starting work 2 hours before the London office is one of the perks our clients love. It gives the remote team enough time to get into the office and get started for the day before the Londoners have even had their first fancy coffee. The flight is only 3hrs 20 minutes which also makes it completely feasible to pop over and work alongside the team for a couple of days."
    // } else if(index === 2){
    //     header.textContent = "The Cost"
    //     paragraph.textContent = "The average monthly salary in Kiev is significantly lower than in London, so it’s perfectly reasonable to expect that you will be able to save between 2 and 5 times on wages compared to hiring in the UK depending on the position. Not only will you save on salaries, but everything else associated with hiring in the UK, including but not limited to: recruitment fees, no payroll taxes, no pension or National Insurance Contributions, and additional equipment and overhead costs."
    // }


