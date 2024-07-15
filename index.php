<?php 

 $jayParsedAry = [
   [
         "id" => 1, 
         "username" => "user1", 
         "profile_picture" => "https://images.unsplash.com/photo-1534528741775-53994a69daeb", 
         "photo" => "https://images.unsplash.com/photo-1516117172878-fd2c41f4a759", 
         "caption" => "Enjoying the sunset at the beach! #sunset #beach", 
         "timestamp" => "2024-07-13T18:30:00Z", 
         "likes" => 150, 
         "comments" => [
            [
               "username" => "user2", 
               "comment" => "Beautiful view!", 
               "timestamp" => "2024-07-13T18:45:00Z" 
            ], 
            [
                  "username" => "user3", 
                  "comment" => "Wish I was there!", 
                  "timestamp" => "2024-07-13T19:00:00Z" 
               ] 
         ] 
      ], 
   [
                     "id" => 2, 
                     "username" => "user4", 
                     "profile_picture" => "https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e", 
                     "photo" => "https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0", 
                     "caption" => "Had a great time hiking today. #hiking #nature", 
                     "timestamp" => "2024-07-12T08:15:00Z", 
                     "likes" => 200, 
                     "comments" => [
                        [
                           "username" => "user5", 
                           "comment" => "Looks like a fun hike!", 
                           "timestamp" => "2024-07-12T08:30:00Z" 
                        ] 
                     ] 
                  ], 
   [
                              "id" => 3, 
                              "username" => "user6", 
                              "profile_picture" => "https://images.unsplash.com/photo-1488426862026-3ee34a7d66df", 
                              "photo" => "https://images.unsplash.com/photo-1504674900247-0877df9cc836", 
                              "caption" => "Delicious homemade pizza for dinner. #foodie #pizza", 
                              "timestamp" => "2024-07-11T19:45:00Z", 
                              "likes" => 250, 
                              "comments" => [
                                 [
                                    "username" => "user7", 
                                    "comment" => "Yum! Can I have the recipe?", 
                                    "timestamp" => "2024-07-11T20:00:00Z" 
                                 ], 
                                 [
                                       "username" => "user8", 
                                       "comment" => "That looks amazing!", 
                                       "timestamp" => "2024-07-11T20:15:00Z" 
                                    ] 
                              ] 
                           ], 
   [
                                          "id" => 4, 
                                          "username" => "user9", 
                                          "profile_picture" => "https://images.unsplash.com/photo-1500648767791-00dcc994a43e", 
                                          "photo" => "https://images.unsplash.com/photo-1533777324565-a040eb52fac0", 
                                          "caption" => "Exploring the city. #urban #adventure", 
                                          "timestamp" => "2024-07-10T14:30:00Z", 
                                          "likes" => 180, 
                                          "comments" => [
                                             [
                                                "username" => "user10", 
                                                "comment" => "Great shot!", 
                                                "timestamp" => "2024-07-10T14:45:00Z" 
                                             ] 
                                          ] 
                                       ], 
   [
                                                   "id" => 5, 
                                                   "username" => "user11", 
                                                   "profile_picture" => "https://images.unsplash.com/photo-1517841905240-472988babdf9", 
                                                   "photo" => "https://images.unsplash.com/photo-1519125323398-675f0ddb6308", 
                                                   "caption" => "Morning coffee to start the day. #coffee #morning", 
                                                   "timestamp" => "2024-07-09T07:00:00Z", 
                                                   "likes" => 300, 
                                                   "comments" => [
                                                      [
                                                         "username" => "user12", 
                                                         "comment" => "Can’t start my day without coffee either!", 
                                                         "timestamp" => "2024-07-09T07:15:00Z" 
                                                      ], 
                                                      [
                                                            "username" => "user13", 
                                                            "comment" => "Nice mug!", 
                                                            "timestamp" => "2024-07-09T07:30:00Z" 
                                                         ] 
                                                   ] 
                                                ] 
]; 
 
 echo json_encode($jayParsedAry);
?>
