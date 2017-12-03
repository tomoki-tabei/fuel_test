<?php

class Controller_Blog extends Controller_Template
{
  public function action_index(){
    $data = array();
    $this->template->title = "ブログのページだよ";
    $this->template->content = View::forge('blog/index', $data);
  }
  public function action_edit(){
    $data = array();
    $this->template->title = "編集ページだよ";
    $this->template->content = View::forge('blog/edit', $data);
  }
}
