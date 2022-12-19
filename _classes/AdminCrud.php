<?php


    class AdminCrud {

        public static function addDoctor($data, $connect){
            $query = "insert into doctor(fullName, email, pwd, speciality) values(:name, :email, :pwd, :specialties)";
            $stmt = $connect->prepare($query);
            $stmt->execute([":name" => $data["name"], ":email" => $data["email"], ":pwd" => $data["pwd"], ":specialties" => $data["specialties"]]) ;
        }
        public static function displayDoctor(){
            global $connect;
            $query = "select * from doctor";
            $stmt = $connect->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $row){
                echo
                '<tr>
                    <th scope="row">'.$row["fullName"].'</th>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["speciality"].'</td>
                    <td>
                    <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="editDoctor('.$row["id_doctor"].')"><i class="fas fa-pen"></i> Edit </button>
                    <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure"><i class="fa fa-eye"></i> View </button>
                    <button type="button" class="btn btn" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;background: #34AEAD; color:azure" data-bs-toggle="modal" data-bs-target="#deleteDoctor" onclick="deleteDoctor('.$row["id_doctor"].')"><i class="fa fa-trash" ></i> Remove </button>
                    </td>
                </tr>';
            }
        }
        public static function counter($property){
            global $connect;
            switch($property){
                case "doctors":
                    $query = "SELECT COUNT(*) FROM doctor";
                    $stmt = $connect->prepare($query);
                    $stmt->execute();
                    $number_of_rows = $stmt->fetchColumn();
                return $number_of_rows;
                case "patients":
                    $query = "SELECT COUNT(*) FROM patients";
                    $stmt = $connect->prepare($query);
                    $stmt->execute();
                    $number_of_rows = $stmt->fetchColumn();
                return $number_of_rows;
                case "appointement":
                    $query = "SELECT COUNT(*) FROM appointement";
                    $stmt = $connect->prepare($query);
                    $stmt->execute();
                    $number_of_rows = $stmt->fetchColumn();
                return $number_of_rows;
                case "session":
                    $query = "SELECT COUNT(*) FROM session";
                    $stmt = $connect->prepare($query);
                    $stmt->execute();
                    $number_of_rows = $stmt->fetchColumn();
                return $number_of_rows;
            }
        }

        public static function editDoctor($id){
            global $connect;

            $query = "select * from doctor where id_doctor = $id";
            $stmt = $connect->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];
        }

        public static function updateDoctor(){
            global $connect;

            $id = $_POST['doctorId'];
            $name = $_POST['fullName'];
            $specialty = $_POST['specialties'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "update doctor set fullName = '$name', email = '$email', pwd = '$password', speciality = '$specialty' where id_doctor = '$id'";
            $stmt = $connect->prepare($query);
            $stmt->execute();
        }

        public function pre_deleteDoctor($id){
            global $connect;

            $query = "select * from doctor where id_doctor = $id";
            $stmt = $connect->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];
        }

        public static function deleteDoctor(){
            global $connect;
            $id = $_POST["docId"];
            $query = "delete from doctor where id_doctor = $id";
            $stmt = $connect->prepare($query);
            $stmt->execute();
        }

        public static function addSession($data){
            global $connect ;
            $query = "INSERT INTO session(title, date_session, max_booking, id_doctor) VALUES(:title, :date_session, :max_booking,(SELECT id_doctor FROM doctor WHERE fullName = :fullName))" ;
            $stmt = $connect->prepare($query) ;
            $stmt->execute([
                "title" => "test", 
                "date_session" => $data["date"],
                "max_booking" => 10,
                "fullName" => $data["doctor"] 
                ]) ;
            
        }

        public static function deleteSession($id){
            global $connect ;
            $query = "DELETE FROM session WHERE id_session = :id" ;
            $stmt = $connect->prepare($query) ;
            $stmt->execute(["id" => $id]) ;
            return "session has been deleted successfully" ;
        }
        public static function selectAllSession(){
            global $connect ;
            $query = "SELECT * FROM session" ;
            $stmt = $connect->query($query) ;
            $result = $stmt->rowCount() ;
            return $result ;
        }
        
        public function displayPatientData(){
            global $connect;
            $query = "SELECT * FROM patients";
            $stmt = $connect->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }
    }
    