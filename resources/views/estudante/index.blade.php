

              
  
            <form action="{{ route ('estudante.edit', $estudante->id)}} ">
            <div>
                    <label for="fname">nome:</label> <br>
                    <input type="text" id="nome" name="nome" value="{{$estudante->nome}}"><br><br>
           </div>  
                 <button> type="submit"</button>
               
            </form>
