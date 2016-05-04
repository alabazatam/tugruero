<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of ContentsHtml
	 *
	 * @author marcos
	 */
	class ContentsHtml {
		//put your code here
		public function __construct() {
			
		}
		
		public function getContentTitle($id_app,$section,$page, $language, $id_app, $name)
		{
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->contents_html
                        ->select("*")
                        ->where('id_app=?',$id_app)
                        ->and('section =?',$section)
						->and('page=?',$page )
						->and('language=?',$language)
						->and('id_app=?',$id_app)
						->and('name=?',$name)
						->and('title <>?','')
						->and('status=?',1)
						->fetch();

			return $q['title'];  			
			
		}
		public function getContents($id_app,$section,$page, $language, $id_app, $name)
		{
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->contents_html
                        ->select("*")
                        ->where('id_app=?',$id_app)
                        ->and('section =?',$section)
						->and('page=?',$page )
						->and('language=?',$language)
						->and('id_app=?',$id_app)
						->and('name=?',$name)
						->and('status=?',1);

			$query = $q;
			$q = null;
			return $query;    			
			
		}
		public function getContentsList($id_app,$page, $language)
		{
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->contents_html
                        ->select("*")
                        ->where('id_app=?',$id_app)
						->and('page=?',$page )
						->and('language=?',$language);

			$query = $q;
			$q = null;
			return $query;   			
			
		}
		public function getContentsValue($id_content)
		{
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->contents_html
                        ->select("*")
                        ->where('id_content=?',$id_content)
						->fetch();

			$query = $q;
			$q = null;
			return $query;   			
			
		}
		public function updateContentsHtml($values)
		{
			unset($values['action'],$values['date_created']);
                        $values['date_updated'] = new NotORM_Literal("NOW()");
			$id_content= $values['id_content'];
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->contents_html("id_content", $id_content)->update($values);		
		}
	}
