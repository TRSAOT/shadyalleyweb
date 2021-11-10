import flask

app = flask.Flask(__name__)

@app.route("/") # the function below is called when someone tries to go to the base url
def main(): # you can call the function whatever you want
  return flask.render_template("index.html")


@app.route("/Home") # when someone goes to /otherpage
def Home():
  return flask.render_template("Home.html")

@app.route("/Shady%20Alley") # when someone goes to /cactuspage
def Shady():
  return flask.render_template("Shady Alley.html")

app.run("0.0.0.0")