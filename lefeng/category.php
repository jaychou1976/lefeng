<?php
	//获得当前页面
	$page = $_REQUEST['p'];
	//模拟数组
	$arr = [
		array("pic"=>"assets/images/kazilan01.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan02.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan03.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan04.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan05.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan06.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan07.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan08.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan09.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan10.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan11.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan12.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan13.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan14.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan15.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan16.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan17.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan18.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan19.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan20.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan21.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan22.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan23.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan24.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan25.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan26.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan27.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan28.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan29.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan30.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan31.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan32.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan33.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan34.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan35.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan36.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan37.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan38.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan39.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan40.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan41.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan42.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan43.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan44.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan45.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan46.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan47.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan48.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan49.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan50.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan51.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan52.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan53.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan54.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),
		array("pic"=>"assets/images/kazilan55.jpg","hide"=>"点睛之笔","text"=>"【你的眼里有星星】卡姿兰Carslan大眼睛-浓卷丰舒畅眼线液 1.0ml","fuhao"=>"￥","money"=>"55.0","zhekou"=>"(8.0折)","del"=>"￥69.0","shopcar"=>"加入购物车"),





	];



  $offset = ($page-1)*12; //索引
  $length = 12;
  echo json_encode(array_slice($arr,$offset,$length));


?>