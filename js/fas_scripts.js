
	var TypesArr = {100: ['CSC 101', 'CSC 102', 'CSC 102'],
					200: ['CSC 203', 'CSC 204'],
					300: ['CSC 301', 'CSC 302'],
					400: ['CSC 402', 'CSC 402'],
					500: ['CSC 504', 'CSC 505']


				}


	function ChangeContext(value)
	{
	    if (TypesArr.hasOwnProperty(value))
	    {
	        var out = ''

	        for (var i = 0; i < TypesArr[value].length; i++)
	        {
	             out += '<option value="' + TypesArr[value][i] + '">' + TypesArr[value][i] + '</option>'
	        }

	        document.getElementById('select2').innerHTML = out
	    }
	}

	ChangeContext('')