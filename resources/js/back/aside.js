const wraper = document.querySelector('.wraper');
const btn_toggle = document.querySelector('#btn_toggle');


btn_toggle.addEventListener('click', ()=>{
	wraper.classList.toggle('min');
	// if(wraper.classList.value.indexOf('show') < 0){

	//  wraper.classList.add('');
	//  wraper.classList.remove('w-64');
	// }else{
	// 	wraper.classList.remove('w-16');
	//     wraper.classList.add('w-64');
	// }	

})