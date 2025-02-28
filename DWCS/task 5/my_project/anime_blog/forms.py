from django import forms
from .models import Comment

class LoginForm(forms.Form):
    user_name= forms.CharField(label="Introduce your username:", max_length=40, error_messages={
        "required": "Your username not be empty!",
        "max_length": "Please, choose a shorter name!",
    })
    
    email = forms.EmailField(label="Introduce your email:", error_messages={
        "required": "Your email not be empty!",
        "invalid": "Introduce a valid email",
    })
    
    password = forms.CharField(
        label="Introduce your password:",
        widget=forms.PasswordInput,
        error_messages={
            "required": "Your password cannot be empty!"
        }
    )
    confirm_password = forms.CharField(
        label="Confirm your password:",
        widget=forms.PasswordInput,
        error_messages={
            "required": "Please confirm your password!",
        }
    )

    def clean(self):
        cleaned_data = super().clean()
        password = cleaned_data.get("password")
        confirm_password = cleaned_data.get("confirm_password")
        
        if password and confirm_password and password != confirm_password:
            self.add_error("confirm_password", "Passwords do not match!")
        
        return cleaned_data




class CommentForm(forms.ModelForm):
    
    class Meta:
        model = Comment
        fields = ("user_name","email","comment_description")
        labels = {
            "user_name": "Username (session):",
            "email": "User-Email (session):",
            "comment_description": "Comment:"
        }

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields["user_name"].widget.attrs.update({"readonly": True})
        self.fields["email"].widget.attrs.update({"readonly": True})