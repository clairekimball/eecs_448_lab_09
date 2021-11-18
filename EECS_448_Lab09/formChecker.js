function validate()
{
let flag1 = false;
let flag2 = false;
let flag3 = false;
let flag4 = false;
let boba = document.getElementById('boba');
let mammoth = document.getElementById('mammoth');
let dino = document.getElementById('dino');
let username = document.getElementById('username');
let password = document.getElementById('password');
let free = document.getElementById('free');
let fifty = document.getElementById('50');
let five = document.getElementById('5');

if (parseInt(boba.value) >=0 && parseInt(mammoth.value) >=0 && parseInt(dino.value)>=0)
{
	flag1 = true;
}

if(password.value.length!=0)
{
	flag2 = true;
}

if(free.checked || fifty.checked || five.checked)
{
	flag3=true;
}

if (username.value.length >=5)
{

	if(username.value.includes('@'))
	{
		let str=username.value.split('@');
		if (str[0].length > 0)
		{

		if (str[1].includes('.'))
		{
			let str1=str[1].split('.');
			if (str1[0].length > 0 && str1[1].length > 0)
			{
				flag4 = true;
			}

		}
		}


        
	}

}

return (flag1 && flag2 && flag3 && flag4 );
}
