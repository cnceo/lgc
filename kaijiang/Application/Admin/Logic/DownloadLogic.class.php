<?php
 namespace Admin\Logic; class DownloadLogic extends BaseLogic{ protected $_validate = array( array('content', 'require', '详细内容不能为空！', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH), array('download', 'number', '下载次数请输入整数！', self::VALUE_VALIDATE , 'regex', self::MODEL_BOTH), array('file_id', 'require', '请上传附件！', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH), ); protected $_auto = array(); public function detail($id){ $data = $this->field(true)->find($id); if(!$data){ $this->error = '获取详细信息出错！'; return false; } $file = D('File')->field(true)->find($data['file_id']); return $data; } public function update($id = 0){ $data = $this->create(); if(!$data){ return false; } $file = json_decode(think_decrypt(I('post.file_id')), true); if(!empty($file)){ $data['file_id'] = $file['id']; $data['size'] = $file['size']; } else { $this->error = '获取上传文件信息失败！'; return false; } if(empty($data['id'])){ $data['id'] = $id; $id = $this->add($data); if(!$id){ $this->error = '新增详细内容失败！'; return false; } } else { $status = $this->save($data); if(false === $status){ $this->error = '更新详细内容失败！'; return false; } } return true; } public function download($id){ $info = $this->find($id); if(empty($info)){ $this->error = "不存在的文档ID：{$id}"; return false; } $File = D('File'); $root = C('DOWNLOAD_UPLOAD.rootPath'); $call = array($this, 'setDownload'); if(false === $File->download($root, $info['file_id'], $call, $info['id'])){ $this->error = $File->getError(); } } public function setDownload($id){ $map = array('id' => $id); $this->where($map)->setInc('download'); } public function autoSave($id = 0){ $this->_validate = array(); $data = $this->create(); if(!$data){ return false; } $file = json_decode(think_decrypt(I('post.file_id')), true); if(!empty($file)){ $data['file_id'] = $file['id']; $data['size'] = $file['size']; } if(empty($data['id'])){ $data['id'] = $id; $id = $this->add($data); if(!$id){ $this->error = '新增详细内容失败！'; return false; } } else { $status = $this->save($data); if(false === $status){ $this->error = '更新详细内容失败！'; return false; } } return true; } } 