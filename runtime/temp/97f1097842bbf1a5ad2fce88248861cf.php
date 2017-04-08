<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"./template/mobile/new/goods\ajaxComment.html";i:1490353004;}*/ ?>
 <!---晒单end-->
<?php if($count > 0): ?>
<div class="comment_list" id="commentList">
    <ul>
      <?php if(is_array($commentlist) || $commentlist instanceof \think\Collection): if( count($commentlist)==0 ) : echo "" ;else: foreach($commentlist as $k=>$v): if($v['is_show'] == 1): ?>
          <li class="comment_item">
            <div class="content_head" <?php if(($k+1) == count($comment_list)): ?> style="border-bottom:0px solid #CCC;"<?php else: ?>style="border-bottom:1px solid #CCC;"<?php endif; ?>>
                  <div class="info">
                    <div class=" comment_star">
                      <div class="one"><em>		<img src="<?php echo (isset($v['head_pic']) && ($v['head_pic'] !== '')?$v['head_pic']:'__STATIC__/images/user68.jpg'); ?>" style="width: 50px"><span><?php echo $user['nickname']; ?></span></em></div>
                      <div class="name">
                            <?php echo $v['username']; ?>
                            <em><img src="__STATIC__/images/stars<?php echo $v['service_rank']; ?>.png" alt="" /></em>
                      </div>
                       <div class="two"><?php echo date('Y-m-d H:i',$v['add_time']); ?></div>
                    </div>
                  </div>
                  <p> <?php echo htmlspecialchars_decode($v['content']); ?></p>
                 <!---晒单-->
                <?php if($v['img'] != ''): ?>
                    <!--<div class="shaidan">
                      <h4><?php echo $value['title']; ?></h4>
                      <p><?php echo $value['content']; ?></p>
                    </div>-->
                        <div class="sd_img">
                        <dl id="gallery">
                            <?php if(is_array($v['img']) || $v['img'] instanceof \think\Collection): if( count($v['img'])==0 ) : echo "" ;else: foreach($v['img'] as $key=>$v2): ?>
                                <dd>
                                    <a href="<?php echo $v2; ?>"><img src="<?php echo $v2; ?>" width="100px" heigth="100px"></a>
                                </dd>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </dl>
                        </div>
                <?php endif; ?>

                <!--管理员回复-->
                <?php if(is_array($replyList) || $replyList instanceof \think\Collection): if( count($replyList)==0 ) : echo "" ;else: foreach($replyList as $key=>$val): if($val['parent_id']  == $v['comment_id']): ?>
                        <p style=" color:#F60; border-top:1px dashed #e5e5e5; padding-top:8px; margin-top:10px"><span>管理员<?php echo $val['username']; ?>回复：<br></span><?php echo $val['content']; ?></p>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
          </li>
     <?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
<?php else: ?>
	<script>
		ajax_sourch_submit_hide();
	</script>
<div class="comment_list" >
	<div class="score">暂时还没有任何用户评论</div>
</div>
<?php endif; ?>
</div>
 <?php if(($count > $current_count) AND (count($commentlist) == $page_count)): ?>
	<div class="getmore" style="font-size:.24rem;text-align: center;color:#888;padding:.25rem .24rem .4rem; clear:both">
		<a href="javascript:void(0)" onClick="ajax_sourch_submit();">点击加载更多</a>
	</div>
	 <?php elseif(($count <= $current_count AND $count > 0)): ?>
	 <div class="score">已显示完所有评论</div>
	 <?php else: endif; ?>
<script>
	var  page = <?php echo $p; ?>;
	function ajax_sourch_submit() {
		page += 1;
		$.ajax({
			type: "GET",
			url:"/index.php?m=Mobile&c=Goods&a=ajaxComment&goods_id=<?php echo $goods_id; ?>&commentType=<?php echo $commentType; ?>&p="+page,//+tab,
			success: function (data) {
				$('.getmore').hide();
				if ($.trim(data) != ''){
					$("#commentList").append(data);
				}
			}
		});
	}
	function  ajax_sourch_submit_hide(){
		$('.getmore').hide();
	}
</script>