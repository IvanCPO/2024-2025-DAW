from django.shortcuts import render, HttpResponseRedirect
from .models import Serie, Category, Comment
from django.views import View
from django.views.generic import DetailView
from .forms import CommentForm, LoginForm
from django.urls import reverse

# Create your views here.
def home(request):
    series = Serie.objects.all().order_by("-date")
    categories = Category.objects.all()
    session = request.session.get("account")
    return render(request, "home.html", 
        {
            "categories": categories,
            "series": series,
            "session": session
        })

    

class DetailCategoryView(DetailView):
  template_name = "category_series.html"
  model = Category
  context_object_name = "category"
  
  def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["series"] = Serie.objects.filter(categories__id=context["category"].id)
        session = self.request.session.get("account")
        context["session"] = session
        return context



class DetailSerieView (View):
    
    def get(self, request, slug):
        session = request.session.get("account")
        serie = Serie.objects.get(slug=slug)
        form = CommentForm()
        if session is not None:
            form = CommentForm(initial={
                'user_name': session["user_name"],
                'email': session["email"]
                })
        comments = Comment.objects.all().filter(serie=serie).order_by("-date_comment")
        
        context = {
            "serie": serie,
            "categories": serie.categories.all(),
            "comment_form": form,
            "session": session,
            "comments": comments,
            
        }
        return render(request, "serie_details.html", context)
    
    def post(self, request, slug):
        comment_form = CommentForm(request.POST)
        serie = Serie.objects.get(slug=slug)
        if comment_form.is_valid():
            comment = comment_form.save(commit=False)
            comment.serie = serie
            comment.save()
            return HttpResponseRedirect(reverse("serie_details", args=[slug]))
        session = request.session.get("account")
        comments = Comment.objects.filter(serie=serie).order_by("-date_comment")
        
        context = {
            "serie": serie,
            "categories": serie.categories.all(),
            "comment_form": comment_form,  # Muestra errores en el template
            "session": session,
            "comments": comments,
        }
        
        return render(request, "serie_details.html", context)


class LoginView(View):
    def get(self, request):
        session = request.session.get("account")
        form = LoginForm()
        return render(request, "login.html", 
            {
                "form":form,
                "session": session
            })
    def post(self, request):
        form= LoginForm(request.POST)
        if form.is_valid():
            request.session["account"]= {
                "user_name": form.cleaned_data['user_name'],
                "email": form.cleaned_data['email'],
                "password": form.cleaned_data['password'],
                
            }
            request.session.modified = True
            print("Session Save")
            return HttpResponseRedirect("/")
        return render(request, "login.html", 
            {
                "form":form,
                "session": request.session.get("account")
            })

def logout_view(request):
    request.session.flush()
    return HttpResponseRedirect("/")
