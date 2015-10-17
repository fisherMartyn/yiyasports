<?php

class EssayCover{
	var $title;
	var $coverimage;
	var $author;
	var $pubtime;
	var $readtimes;
	var $good;
	var $bad;
	var $id;
	var $covercontent;	
	var $path;

	function EssayCover($conn,$id,$path="./essays/"){
		$this->id=$id;
		$q_t="select * from essay where id=$id";
		$result_t=mysqli_query($conn,$q_t);
	        if(!$result_t)
                {
                        die("no such essay!");
                        exit;
                }
                $row_t=mysqli_fetch_assoc($result_t);
		$this->title=$row_t['title'];
		$this->author=$row_t['author'];
		$this->readtimes=$row_t['readtimes'];
		$this->pubtime=$row_t['pubtime'];
		$this->good=$row_t['good'];
		$this->bad=$row_t['bad'];
		$this->path=$path;
	}

	function getCover(){
		$str="";
		$str=$str."<a class=\"essay-cover-a\" href=\"index.php?act=essay&essayid=$this->id\">";
		$str=$str."<div data-id=\"$this->id\" class=\"essay-cover text-center\">";
		$str=$str."<h4>".$this->title."</h4>";
		$this->covercontent=file_get_contents($this->path."cover-".$this->id.".html");
		$str=$str."<div class=\"essay-cover-content\">$this->covercontent</div>";
		$str=$str."<div class=\"essay-cover-footer\"><span>作者:</span><label class='label'>$this->author</label></div>";
		$str=$str."</div></a>";
		return $str;
	}


}



?>
