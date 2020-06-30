<?php
use Intervention\Image\ImageManagerStatic;
use \App\MemberLevel;
//自定义的系统函数

//第一步：在app下创建Common目录，在Common创建functions.php文件，将自定义函数写入该文件
//第二步：修改composer.json文件，添加files配置选项，将functions.php的路径写入该选项
//第三步：在命令行执行composer dump-autoload

function Fupload($file,$arr = ['image/jpeg','image/png','image/gif'],  $maxSize = 2048576 ){
    //文件类型
    $type =  $file -> getMimeType();
    //判断文件类型
    if(in_array($type,$arr)){
        //判断文件大小
        $size = $file -> getSize();

        if($size <= $maxSize){

            //文件保存的目录
            $dir = config('filesystems.upload');

            //新的随机唯一文件名
            $name = md5(uniqid(mt_rand(),true)) . '.' . $file->getClientOriginalExtension();

            //上传
            if( $file -> move( $dir , $name)){
                //缩放
                $img1 = ImageManagerStatic::make($dir.$name)->resize(800,800)->save($dir.'800_'.$name);
                $img2 = ImageManagerStatic::make($dir.$name)->resize(350,350)->save($dir.'350_'.$name);
                $img3 = ImageManagerStatic::make($dir.$name)->resize(100,100)->save($dir.'100_'.$name);
                $img4 = ImageManagerStatic::make($dir.$name)->resize(240,240)->save($dir.'240_'.$name);

                //销毁
                $img1 -> destroy();
                $img2 -> destroy();
                $img3 -> destroy();
                $img4 -> destroy();
                return ['status'=>'ok','dir'=>$dir, 'name'=>$name];
            }else{
                return ['status'=>'error','msg'=>'上传失败'];
            }

        }else{
            return ['status'=>'error','msg'=>'文件大小超过最大允许范围'];
        }

    }else{
        return ['status'=>'error','msg'=>'文件类型不正确'];
    }
}
