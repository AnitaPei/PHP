<?php
    class MyBookModel extends Model{
        function mybooks($usernane){
            $sql="select b.book_name,b.book_info,b.cover,b.size,n.book_nav,m.admin_user from qd_book b,qd_favorite f,qd_nav n,qd_manage m,qd_user u where u.id=f.user_nane and u.user_name='$usernane' and f.book=b.id and b.book_type=n.id and b.author=m.id";
            return $this->all($sql);
        }
    }




?>