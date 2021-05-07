const quizDB =[

{
question:"Q1/15:Are you suffering from feelings of sadness,hopelessness or emptiness?",
a:"Not really",
b:"Ocasionally",
c:"Most of the time",

ans:"ans3"
},

{
question:"Q2/15:Do you experience low-energy,morning sickness or sleepiness most of the time?",
a:"Yes",
b:"No",
c:"Sometimes",


ans:"ans1"

},
{
question:"Q3/15:Do you feel lethargic or having no energy on daily basis?",
a:"Never",
b:"Almost Always",
c:"Yes,but only when i m geniunely tired",

	
ans:"ans2"
	

},
{
question:"Q4/15:Has your appetite changed,due to which you also experience changes in weight",
a:"Drastically-I don't feel like eating anymore",
b:"Some of the time",
c:"Not really",
	
ans:"ans1"

},
{
question:"Q5/15:Are you having trouble getting to sleep and staying asleep?Or are you finding it hard to get up in the morning?.",
a:"Everyday",
b:"No",
c:"Yes-but that's not new to me",

	
ans:"ans1"
	


},
{
question:"Q6/15:What will be your response to extra work or very busy schedule:",
a:"Stay calm and give my best",
b:"Initially,I may be nervous but will act effectively after making a plan.",
c:"I will get frustated or feel unwillingless to act",

	
ans:"ans3"


},
{
question:"Q7/15:Are you harsh on yourself or overly self-critical?",
	
	
a:"Yes,I am like that all the time",
b:"Some of the time",
c:"No",

ans:"ans1"


},
{
question:"Q8/15: Do you feel low or'Under a cloud'?",
	
	
a:"Not really",
b:"Yes,quiet often",
c:"Some of the time",


ans:"ans2"

},
{
question:"Q9/15:Do you consider harming yourself or ending your life?",
a:"Never",
b:"Sometimes",
c:"Most of the time",

ans:"ans3"
	},
{
question:"Q10/15:Do you find it hard to enjoy things you used to before or feel lack of motivation in doing anything?",
a:"Yes",
b:"No",
c:"Sometimes",
	
ans:"ans1"
},
{
question:"Q11/15:How social are you?",
a:"I can interact with anyone without any hesitation",
b:"i can talk to people but i don't prefer to initiate a conversation.",
c:"It is difficult for me to interact with people",
	
ans:"ans3"
},

{
question:"Q12/15:Do you now feel no joy in life,or feeling like never will again?",
a:"Yes",
b:"Sometimes",
c:"No",
	
ans:"ans1"

},

{
question:"Q13/15:Are you full of nervous energy,or moving less than usual?",
a:"Never-I am energetic most of the time",
b:"ocassionally",
c:"Yes",
	
ans:"ans3"
},
{
question:"Q14/15:Are you addicted to internet or any particular food,beverage or particular drug?",
a:"Yes,i am very much dependent on certain things",
b:"I am habitual of a few things,but not really addicted",
c:"No,I don't experience Addiction of any sort",
	
ans:"ans1"
},
{
question:"Q15/15:How is your mood most of the time?",
a:"Happy",
b:"Sad",
c:"Normal",
	
ans:"ans2"
}

];
const question =document.querySelector('.question');
const option1=document.querySelector('#option1');
const option2=document.querySelector('#option2');
const option3=document.querySelector('#option3');

const submit =document.querySelector('#submit');

const answers = document.querySelectorAll('.answer');

const showScore =document.querySelector('#showScore');

let questionCount = 0;
let score= 0;
const loadQuestion = () => {
	const questionList = quizDB[questionCount];

	question.innerText=questionList.question;

	
     option1.innerText =questionList.a;
     option2.innerText =questionList.b;
     option3.innerText =questionList.c;
       
 }
 loadQuestion();
const getCheckAnswer = () => {
	let answer;

	answers.forEach((curAnsElem)  =>{

		if(curAnsElem.checked){
			answer =curAnsElem.id;
		}

	});
	return answer;
};

const deselectAll = () =>{
	answers.forEach((curAnsElem) => curAnsElem.checked = false);
}
submit.addEventListener('click',() =>{
	const checkedAnswer = getCheckAnswer();
	console.log(checkedAnswer);

	if(checkedAnswer === quizDB[questionCount].ans){
		score++;
	};
	questionCount++;
	deselectAll();
	if(questionCount < quizDB.length){
		loadQuestion();
}else{


	showScore.innerHTML =`
	<h3>REPORT-Your risk level on the scale of 15 is ${score}/${quizDB.length}.Score less than 5 or equal to 5 
	indicate that you have none,or few symptoms of depression or anxiety.if you notice that your symptoms are
	not improving,you may want to bring them up with a mental health professional or someone who is supporting 
	you.Scores that exceeds  5 but are less than 9 are symptoms of mild depression,while your symptoms are not
	likely having a major impact on your life,it is important to monitor them.These results do not mean that you have
	depression,but it may be a time to start a conversation with a mental health professional.Scores above 10 can mean that you may be 
	experincing symptoms of moderatly severe depression.living with these symptoms is causing difficulty managing relationships
	and even the tasks of everyday life.These results do not mean that you have depression, but we would recommend 
	you start a conversation with a mental health professional.
	.</h3>
	<button class ="btn" onclick="location.reload()">Retake Test</button>
	`;
	

    showScore.classList.remove('scoreArea');
}
	
});

 