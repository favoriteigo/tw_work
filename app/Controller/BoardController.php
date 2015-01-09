<?php 
/**
 * 「クラス詳細」
 * 掲示板サイト内
 * 全ての画面から呼ばれるコントローラクラスです。
 * 
 * 「作成者」
 * イッシー
 *
 */
class BoardController extends AppController {
	public $autoLayout = false;
	public $helpers = array('Form','Js','Html');

	/**
	 * 「詳細」
	 * コントローラクラスを定義した時に
	 * 必ず定義するメソッド
	 * 
	 * 「作成者」
	 * イッシー
	 * 
	 */
	function index() {
/**		$data = "HelloWorld";
		$this->set('data',$data); 
*/		
	}
	
	/**
	 *　「詳細」
	 *　ユーザー登録時に呼ぶメソッド
	 *　form送信時にアクションで指定してみる
	 *
	 *　「作成者」
	 *　イッシー
	 *
	 */
	function register() {
		$result = "送信前の結果";
		if($this->request->data) {
			$result = "送信後の結果";
		}
		$this->set("result", $result);
	}

}