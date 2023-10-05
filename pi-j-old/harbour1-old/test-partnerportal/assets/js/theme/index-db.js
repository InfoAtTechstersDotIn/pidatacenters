 $(document).ready(function(){
 	dynamicPoteId();
 })

$('.reg-review').on('click' , (e) =>{
	$('#reviewpop').removeClass('hide');
	let patnerName = $(e.currentTarget).closest()
})
 $('.reg-approve').on('click' , () =>{
	$('#approvepop').removeClass('hide');
})
$('.reg-reject').on('click' , () =>{
	$('#rejectpop').removeClass('hide');
}) 

$('.calVal').on('keyup' , () =>{
		UpdateRcValus();
})
 $('.calValSelect').on('change', () =>{
		UpdateRcValus();
});

  let dynamicPoteId = () =>{
  	let dyanamiCnUM = Math.floor(Math.random() * 1000000000);
  		let potentialId = 'piPartner_'+ dyanamiCnUM;
  		$('#ppotentialid').val(potentialId);
  }

let UpdateRcValus = () =>{
		let mrcs = $('#pmrc').val();
		let arcs = $('#parc').val();
		let otcs = $('#potc').val();
		let cpim = $('#cpinmonths').val();
		console.log(cpim)
		if(mrcs !=='' && arcs !=='' && otcs !=='' ){
			if(cpim !==''){
				let mrc = Number(mrcs)
				let arc =Number(arcs)
				let otc = Number(otcs)
				let nu = Number(cpim);
				let acv=(mrc*12)+otc+arc;
				let tcv = (mrc*nu)+otc+(arc*(nu/12));
				$('#pacv').val(acv);
				$('#ptcv').val(tcv)
			}
			else{
				let mrc = Number(mrcs)
				let arc =Number(arcs)
				let otc = Number(otcs)
				let acv=(mrc*12)+otc+arc;
				$('#pacv').val(acv);
			}
		}
		else{
			$('#pacv').val('');
			$('#ptcv').val('')
		}
}