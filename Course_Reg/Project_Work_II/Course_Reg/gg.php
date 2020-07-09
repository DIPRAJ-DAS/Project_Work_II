                }
                if ($semister != null) {
                  $sql = "Select * from user join user_course where user.id = user_course.user_id and user_course.semister = '$semister'";
                  # code...
                }
                if ($c_id !=null) {
                  $sql = "Select * from user join user_course where user.id = user_course.user_id and user_course.course_id = '$c_id'";
                  # code...
                }

                                $semister= $_REQUEST['sem'];
                $c_id= $_REQUEST['c_id'];