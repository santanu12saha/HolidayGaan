function val()
{
	//Comments Status validation
	if(document.register.mtype.value=="")
	{
		alert("Please select Membership-Type")
		document.register.mtype.focus();
		return false;
	}
	/*if(document.register.mtype.value=="LM")
	{
		if(document.register.mrcaq_set.value=="")
		{
			alert("Please Upload your 'Medical Registration Certificate for anaesthesia Qualification' ")
			document.register.mrcaq_set.focus();
			return false;
		}
		
		var mrcaq_set = document.getElementById('mrcaq_set').value;
		var extension = mrcaq_set.substr(mrcaq_set.lastIndexOf('.')+1).toLowerCase();
		//alert(extension);
		if(extension=='doc' || extension=='docx' || extension=='pdf')
		{
			//return true;
		}
		else
		{
			alert('Only PDF,doc,docx files are allowed.');
			return false;
		}
		
		if(document.register.ug_set.value=="" && document.register.da_set.value=="" && document.register.nbc_set.value=="")
		{
			alert("Please Upload your 'University Degree' OR 'Diploma' OR 'National Board Certificate' ")
			return false;
		}
		
		if(document.register.ug_set.value!="") 
		{
			var ug_set = document.getElementById('ug_set').value;
			var extension1 = ug_set.substr(ug_set.lastIndexOf('.')+1).toLowerCase();
			//alert(extension1);
			if(extension1=='doc' || extension1=='docx' || extension1=='pdf')
			{
				//return true;
			}
			else
			{
				alert('Only PDF,doc,docx files are allowed.');
				return false;
			}
		}
		
		if(document.register.da_set.value!="") 
		{
			var da_set = document.getElementById('da_set').value;
			var extension2 = da_set.substr(da_set.lastIndexOf('.')+1).toLowerCase();
			//alert(extension2);
			if(extension2=='doc' || extension2=='docx' || extension2=='pdf')
			{
				//return true;
			}
			else
			{
				alert('Only PDF,doc,docx files are allowed.');
				return false;
			}
		}
								
		if(document.register.nbc_set.value!="") 
		{
			var nbc_set = document.getElementById('nbc_set').value;
			var extension3 = nbc_set.substr(nbc_set.lastIndexOf('.')+1).toLowerCase();
			//alert(extension3);
			if(extension3=='doc' || extension3=='docx' || extension3=='pdf')
			{
				//return true;
			}
			else
			{
				alert('Only PDF,doc,docx files are allowed.');
				return false;
			}
		}
	}
	
	if(document.register.mtype.value=="ALM")
	{
		if(document.register.mbbs_set.value=="")
		{
			alert("Please Upload your 'MBBS Certificate' ")
			document.register.mbbs_set.focus();
			return false;
		}
		
		if(document.register.mbbs_set.value!="")
		{
			var mbbs_set = document.getElementById('mbbs_set').value;
			var extension4 = mbbs_set.substr(mbbs_set.lastIndexOf('.')+1).toLowerCase();
			//alert(extension4);
			if(extension4=='doc' || extension4=='docx' || extension4=='pdf')
			{
				//return true;
			}
			else
			{
				alert('Only PDF,doc,docx files are allowed.');
				return false;
			}
		}
		
		if(document.register.mrc_set.value=="")
		{
			alert("Please Upload your 'Medical Registration Certificate' ")
			document.register.mrc_set.focus();
			return false;
		}
		
		if(document.register.mrc_set.value!="")
		{
			var mrc_set = document.getElementById('mrc_set').value;
			var extension5 = mrc_set.substr(mrc_set.lastIndexOf('.')+1).toLowerCase();
			//alert(extension5);
			if(extension5=='doc' || extension5=='docx' || extension5=='pdf')
			{
				//return true;
			}
			else
			{
				alert('Only PDF,doc,docx files are allowed.');
				return false;
			}
		}
		
		if(document.register.bc_set.value=="")
		{
			alert("Please Upload your 'Bonafide Certificate' ")
			document.register.bc_set.focus();
			return false;
		}
		
		if(document.register.bc_set.value!="")
		{
			var bc_set = document.getElementById('bc_set').value;
			var extension6 = bc_set.substr(bc_set.lastIndexOf('.')+1).toLowerCase();
			//alert(extension6);
			if(extension6=='doc' || extension6=='docx' || extension6=='pdf')
			{
				//return true;
			}
			else
			{
				alert('Only PDF,doc,docx files are allowed.');
				return false;
			}
		}
	}*/
}
