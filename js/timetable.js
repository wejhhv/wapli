	//現在の日時を取得
var now = new Date();
var Year = now.getFullYear();
var Month = now.getMonth()+1;
var date = now.getDate();
var Hour = now.getHours();
var Min = now.getMinutes();
var Sec = now.getSeconds();





let flag; //実行すべき機能の判別
document.addEventListener("init", (event) => {


	

		//localStorage.clear();
		





		var pageNum; //ページの番号を代入する
		if (event.target.id = "ons-timetable.html") {

			var n=0
			for(;n<42;n++){
				N=n.toString();
				var colorNum=Number(localStorage.getItem('color'+n.toString()));;
				var lectures=document.getElementById("a-"+N.toString());
				
				 changeColor(colorNum,lectures);
			
				//  localStorage.setItem('color'+pageNum.toString(), colorNum);
				// 						var lecturePage=document.getElementById("a-"+pageNum.toString());
				// 						changeColor(colorNum,lecturePage);
			}
			/*時間割表色付けここまで--------------------------------曽川*/



			
			if(localStorage.getItem('fastFlag')==0){//アプリを実行したときの一回目に実行すること
				for(var i=0;i<42;i++){
					localStorage.setItem('attendance'+i.toString(),0);
					localStorage.setItem('late'+i.toString(),0);
					localStorage.setItem('absence'+i.toString(),0);
					localStorage.setItem('kamoku-code'+i.toString(),"　　　");
					localStorage.setItem('lecture-name'+i.toString(),"　　　");
					localStorage.setItem('place'+i.toString(),"　　　");
					localStorage.setItem('teacher-name'+i.toString(),'教授名'+i.toString());
					localStorage.setItem('tani'+i.toString(),"単位数"+i.toString());
					localStorage.setItem('RoomContentmemo'+i.toString() ,"");
				}
		
				localStorage.setItem('fastFlag',1);
			}else if(localStorage.getItem('fastFlag')!=1){
				localStorage.setItem('fastFlag',0);
			}
		
	for(var i=0;i<42;i++){
		document.getElementById("a-"+i.toString()+"c").innerText=localStorage.getItem('lecture-name'+i.toString());
		document.getElementById("a-"+i.toString()+"p").innerText=localStorage.getItem('RoomContentmemo'+i.toString());
	}




	
		
				// 詳細ページを開く
				a = document.getElementsByClassName('a');
				lecturePage = document.getElementById('lecturePage');
				
				var lecturePageListItem = document.getElementsByClassName('lecturePageListItem');
				
				
				
				lecture = document.getElementById("1_lecture")
				for (let i = 0; i < a.length; i++) {
						a[i].addEventListener("click", () => {
								console.log(i);
								lecture.pushPage('lecturePage');
								localStorage.setItem('num', i);
							
								
						});
				}
				//詳細の表示
				var pageNum = localStorage.getItem('num'.toString());


			
			
				
				for (let j = 0; j < lecturePageListItem.length; j++) {
					
						lecturePageListItem[j].addEventListener("click", () => {
								console.log(j);
								switch (j) {
								case 0: //出欠
								lecture.pushPage('attendanceConfirmation');
									
								flag=0;
														break;
								case 1: //メモ
									lecture.pushPage('memo');
									flag=1;
														break;
								case 2: //シラバス
									lecture.pushPage('syllabus');
									flag=2;
										break;
								case 3: //e-class
									flag=3;
														break;
								case 4: //評価基準
									lecture.pushPage('EvaluationCriteria');
									flag=4;
										break;
								case 5: //休講情報
									flag=5;
										break;
								case 6: //科目登録
										lecture.pushPage('courseRegistration');
										
										flag = 6;
										break;

								case 7://色の変更-------曽川
										lecture.pushPage('changeColor');
										flag = 7;
										break;
								////色の変更ここまで-------曽川
								default:
										alert("エラー");
										break;
								}
						});
				}
			
				
					
			
				//各ページの機能
				console.log("flagは" + flag);
				switch (flag) {
				case 0: //出欠
			

						//ボタンを取得
						var attendance= document.getElementById("check-attendance");
						var late=document.getElementById("check-late");
						var absence=document.getElementById("check-absence");

					//回数を表示させる場所を取得している
						var attendanceCount=document.getElementById("attendanceCount");
						var lateCount=document.getElementById("lateCount");
						var absenceCount=document.getElementById("absenceCount");

						attendanceDetails=document.getElementById('attendanceDetails');
						attendanceTime=document.getElementById('attendanceTime');

						lateDetails=document.getElementById('lateDetails');
						lateTime=document.getElementById('lateTime');


						//出欠回数０回を表示するために記述している
						absenceDetails=document.getElementById('absenceDetails');
						absenceTime=document.getElementById('absenceTime');
						
						var attendanceCountNum = localStorage.getItem('attendance'+pageNum.toString());
						var lateCountNum = localStorage.getItem('late'+pageNum.toString());
						var absenceCountNum = localStorage.getItem('absence'+pageNum.toString());
						console.log(attendanceCountNum);
						
						attendance.addEventListener("click", () => {//出席ボタンを押したときの処理
							localStorage.setItem('attendanceDate'+attendanceCountNum.toString(),Year + '年' + Month + '月' + date + '日' + Hour +'時' + Min + '分'+ Sec+'秒');
							attendanceCountNum++;
							localStorage.setItem('attendance'+pageNum.toString(), attendanceCountNum);
							document.getElementById("attendanceCount").innerText=attendanceCountNum+"回";

						});
						late.addEventListener("click", () => {//遅刻ボタンを押したときの処理
							localStorage.setItem('lateDate'+lateCountNum.toString(),Year + '年' + Month + '月' + date + '日' + Hour +'時' + Min + '分'+ Sec+'秒');
							lateCountNum++;
							localStorage.setItem('late'+pageNum.toString(), lateCountNum);
							document.getElementById("lateCount").innerText=lateCountNum+"回";
						});
						absence.addEventListener("click", () => {//欠席ボタンを押したときの処理
							localStorage.setItem('absenceDate'+absenceCountNum.toString(),Year + '年' + Month + '月' + date + '日' + Hour +'時' + Min + '分'+ Sec+'秒');
							absenceCountNum++;
							localStorage.setItem('absence'+pageNum.toString(), absenceCountNum);
							document.getElementById("absenceCount").innerText=absenceCountNum+"回";
						});

						attendanceCount.addEventListener("click", () => {//出席回数の詳細を表示
							for(var i=0;i<attendanceCountNum;i++){
								var attendanceDate = localStorage.getItem('attendanceDate'+i.toString());
								attendanceTime.insertAdjacentHTML ('afterbegin', '<ons-list-item>'+attendanceDate+'</ons-list-item><br>');
							}
							attendanceDetails.style.display='block';
						});

						lateCount.addEventListener("click", () => {//出席回数の詳細を表示
							for(var i=0;i<lateCountNum;i++){
								var lateDate = localStorage.getItem('lateDate'+i.toString());
								lateTime.insertAdjacentHTML ('afterbegin', '<ons-list-item>'+lateDate+'秒</ons-list-item><br>');
							}
							lateDetails.style.display='block';
						});

						absenceCount.addEventListener("click", () => {//出席回数の詳細を表示
							for(var i=0;i<absenceCountNum;i++){
								var absenceDate = localStorage.getItem('absenceDate'+i.toString());
								absenceTime.insertAdjacentHTML ('afterbegin', '<ons-list-item>'+absenceDate+'秒</ons-list-item><br>');
							}
							absenceDetails.style.display='block';
						});

						//詳細ページを閉じる
						document.getElementById('attendanceDetailsClose').addEventListener("click", () => {
							attendanceDetails.style.display='none';
						});
						document.getElementById('lateDetailsClose').addEventListener("click", () => {
							lateDetails.style.display='none';
						});
						document.getElementById('absenceDetailsClose').addEventListener("click", () => {
							absenceDetails.style.display='none';
						});


						//詳細情報を削除する
						document.getElementById('checkAttendanceClear').addEventListener("click", () => {
							for(var i=0;i<attendanceCountNum;i++){
								localStorage.removeItem('attendanceDate'+i.toString());
								

							}
							for(var i=0;i<lateCountNum;i++){
								localStorage.removeItem('lateDate'+i.toString());
								
							}
							for(var i=0;i<absenceCountNum;i++){
								localStorage.removeItem('absenceDate'+i.toString());
							}
							attendanceTime.innerText="　　　";
							lateTime.innerText="　　　";
							absenceTime.innerText="　　　";
							attendanceCountNum=0;
							lateCountNum=0;
							absenceCountNum=0;
							localStorage.setItem('attendance'+pageNum.toString(), attendanceCountNum);
							localStorage.setItem('late'+pageNum.toString(), lateCountNum);
							localStorage.setItem('absence'+pageNum.toString(), absenceCountNum);
							document.getElementById("attendanceCount").innerText=attendanceCountNum+"回";
							document.getElementById("lateCount").innerText=lateCountNum+"回";
							document.getElementById("absenceCount").innerText=absenceCountNum+"回";

							
						});
						


						break;
				case 1: //メモ
				case 1: //メモ----曽川
				var memoSaveButton=document.getElementById("memoSaveButton");
					document.getElementById("memoarea").value=localStorage.getItem("memoContent"+pageNum.toString());
					memoSaveButton.addEventListener("click", () => {
						var memoareaContent=document.getElementById("memoarea").value;
						localStorage.setItem("memoContent"+pageNum.toString(),memoareaContent);
						alert("保存しました")
						lecture.popPage();
					},false);
					
			
				
							
				//変更点ここまでーーー曽川	
						break;
				case 2: //シラバス
						break;
				case 3: //e-class
						break;
				case 4: //評価基準
						break;
				case 5: //休講情報
						break;
				case 6: //科目登録
				
						$('#ajax').on('click',function(){
							
						 $.ajax({
						  url:'./ajax.php', //送信先
						  type:'POST', //送信方法
						  datatype: 'json', //受け取りデータの種類
						  data:{
						   'id' : $('#id_number').val()
						  }
						  })
						  // Ajax通信が成功した時
						  .done( function(data) {
						
							  for(var i=0;i<data.length;i++){
								document.getElementById("result").insertAdjacentHTML ('afterbegin', '<ons-list-item id=\"result'+i.toString()+'\"　 style=\"background-color:#00bfff\" bordercolor=\"#ffffff\" ><font color=\"#ffffff\"> 科目コード：'+data[i].id+'　　　　講義名：'+data[i].kamoku+'	　　場所：'+data[i].place+'　　	教授名：'+data[i].kyoushi+'	　　単位数：'+data[i].tani+'</font></ons-list-item><br>');
								
							
						  $('#result'+i.toString()).html();
						  console.log('通信成功');
						
						}
						

						  for(let count=0;count<data.length;count++){
							  console.log(count);
						  document.getElementById("result"+count.toString()).addEventListener("click", () => {
						
							localStorage.setItem('kamoku-code'+pageNum.toString(), data[count].id);
							localStorage.setItem('lecture-name'+pageNum.toString(), data[count].kamoku);
							localStorage.setItem('place'+pageNum.toString(), data[count].place);
							localStorage.setItem('teacher-name'+pageNum.toString(), data[count].kyoushi);
							localStorage.setItem('tani'+pageNum.toString(), data[count].tani);
							localStorage.setItem('color'+pageNum.toString(),4);
							var lectures=document.getElementById("a-"+pageNum.toString());
							changeColor(4,lectures);
							var n=0
							for(var i=0;i<42;i++){
								document.getElementById("a-"+i.toString()+"c").innerText=localStorage.getItem('lecture-name'+i.toString());
							
								
							}
							
							alert(data[count].kamoku+"を登録しました");
							  
						});
					}
							
						
							
			
	
	
						  })
						  // Ajax通信が失敗した時
						  .fail( function(data) {
							  alert("見つかりませんでした");
						  $('#result').html(data);
						  console.log('通信失敗');
						  console.log(data);
						  })
						}); //#ajax click end
					   
				 //END
				 
				break;
				case 7://色ーーーー曽川
				var colorCell=document.getElementsByClassName("colorCell");
				for (let colorNum = 0; colorNum < colorCell.length; colorNum++) {
					colorCell[colorNum].addEventListener("click", ()=>{
							lecture.popPage();
							if(colorNum == 0){
							localStorage.setItem('color'+pageNum.toString(), colorNum+16);
							var lecturePage=document.getElementById("a-"+pageNum.toString());
							changeColor(colorNum+16,lecturePage);
							}
							else{localStorage.setItem('color'+pageNum.toString(), colorNum);
							var lecturePage=document.getElementById("a-"+pageNum.toString());
							changeColor(colorNum,lecturePage);
						}
					});
			}

	break;
	}
flag=-1;
}
});

function changeColor(color,lectureNum){
// console.log(color+"：色の番号");
// console.log(lectureNum+"：講義id");

switch (color) {
case 1:
	lectureNum.style.backgroundColor="#f8b7c9";
	break;
case 2:
	lectureNum.style.backgroundColor="#fc93ae";
	break;
case 3:
	lectureNum.style.backgroundColor="#ff7b7b";
	break;
case 4:
	lectureNum.style.backgroundColor="#c4eeee";
	break;
case 5:	
	lectureNum.style.backgroundColor="#8fa8ec";
	break;
case 6:
	lectureNum.style.backgroundColor="#655bee";
	break;
case 7:
	lectureNum.style.backgroundColor="#98fb98";
	break;
case 8:
	lectureNum.style.backgroundColor="#abf8ab";
	break;
case 9:
	lectureNum.style.backgroundColor="#f2fdc1";
	break;
case 10:	
	lectureNum.style.backgroundColor="#fdc867";
	break;
case 11:
	lectureNum.style.backgroundColor="#f0e682";
	break;
case 12:
	lectureNum.style.backgroundColor="#fafaa0";
	break;
case 13:
	lectureNum.style.backgroundColor="#f6eaff";
	break;
case 14:
	lectureNum.style.backgroundColor="#e2d6ff";
	break;
case 15:
	lectureNum.style.backgroundColor="#cec2eb";
	break;
case 16:
	lectureNum.style.backgroundColor="#fdd3dd";
default:
	break;
}
}
//色関数ここまで　曽川