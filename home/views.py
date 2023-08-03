from django.shortcuts import render, HttpResponse

# Create your views here.
def home(request):
    response = "robert"
    return HttpResponse(response)

def home(request):
    return render(request, "home/index.html")