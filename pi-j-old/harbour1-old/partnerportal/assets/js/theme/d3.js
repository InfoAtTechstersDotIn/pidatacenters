// https://d3js.org v7.0.0 Copyright 2010-2021 Mike Bostock
!(function (t, n) {
  "object" == typeof exports && "undefined" != typeof module
    ? n(exports)
    : "function" == typeof define && define.amd
    ? define(["exports"], n)
    : n(
        ((t = "undefined" != typeof globalThis ? globalThis : t || self).d3 =
          t.d3 || {})
      );
})(this, function (t) {
  "use strict";
  function n(t, n) {
    return null == t || null == n
      ? NaN
      : t < n
      ? -1
      : t > n
      ? 1
      : t >= n
      ? 0
      : NaN;
  }
  function e(t) {
    let e = t,
      r = t;
    function i(t, n, e, i) {
      for (null == e && (e = 0), null == i && (i = t.length); e < i; ) {
        const o = (e + i) >>> 1;
        r(t[o], n) < 0 ? (e = o + 1) : (i = o);
      }
      return e;
    }
    return (
      1 === t.length &&
        ((e = (n, e) => t(n) - e),
        (r = (function (t) {
          return (e, r) => n(t(e), r);
        })(t))),
      {
        left: i,
        center: function (t, n, r, o) {
          null == r && (r = 0), null == o && (o = t.length);
          const a = i(t, n, r, o - 1);
          return a > r && e(t[a - 1], n) > -e(t[a], n) ? a - 1 : a;
        },
        right: function (t, n, e, i) {
          for (null == e && (e = 0), null == i && (i = t.length); e < i; ) {
            const o = (e + i) >>> 1;
            r(t[o], n) > 0 ? (i = o) : (e = o + 1);
          }
          return e;
        },
      }
    );
  }
  function r(t) {
    return null === t ? NaN : +t;
  }
  const i = e(n),
    o = i.right,
    a = i.left,
    u = e(r).center;
  function c(t, n) {
    let e = 0;
    if (void 0 === n) for (let n of t) null != n && (n = +n) >= n && ++e;
    else {
      let r = -1;
      for (let i of t) null != (i = n(i, ++r, t)) && (i = +i) >= i && ++e;
    }
    return e;
  }
  function f(t) {
    return 0 | t.length;
  }
  function s(t) {
    return !(t > 0);
  }
  function l(t) {
    return "object" != typeof t || "length" in t ? t : Array.from(t);
  }
  function h(t, n) {
    let e,
      r = 0,
      i = 0,
      o = 0;
    if (void 0 === n)
      for (let n of t)
        null != n &&
          (n = +n) >= n &&
          ((e = n - i), (i += e / ++r), (o += e * (n - i)));
    else {
      let a = -1;
      for (let u of t)
        null != (u = n(u, ++a, t)) &&
          (u = +u) >= u &&
          ((e = u - i), (i += e / ++r), (o += e * (u - i)));
    }
    if (r > 1) return o / (r - 1);
  }
  function d(t, n) {
    const e = h(t, n);
    return e ? Math.sqrt(e) : e;
  }
  function p(t, n) {
    let e, r;
    if (void 0 === n)
      for (const n of t)
        null != n &&
          (void 0 === e
            ? n >= n && (e = r = n)
            : (e > n && (e = n), r < n && (r = n)));
    else {
      let i = -1;
      for (let o of t)
        null != (o = n(o, ++i, t)) &&
          (void 0 === e
            ? o >= o && (e = r = o)
            : (e > o && (e = o), r < o && (r = o)));
    }
    return [e, r];
  }
  class g {
    constructor() {
      (this._partials = new Float64Array(32)), (this._n = 0);
    }
    add(t) {
      const n = this._partials;
      let e = 0;
      for (let r = 0; r < this._n && r < 32; r++) {
        const i = n[r],
          o = t + i,
          a = Math.abs(t) < Math.abs(i) ? t - (o - i) : i - (o - t);
        a && (n[e++] = a), (t = o);
      }
      return (n[e] = t), (this._n = e + 1), this;
    }
    valueOf() {
      const t = this._partials;
      let n,
        e,
        r,
        i = this._n,
        o = 0;
      if (i > 0) {
        for (
          o = t[--i];
          i > 0 && ((n = o), (e = t[--i]), (o = n + e), (r = e - (o - n)), !r);

        );
        i > 0 &&
          ((r < 0 && t[i - 1] < 0) || (r > 0 && t[i - 1] > 0)) &&
          ((e = 2 * r), (n = o + e), e == n - o && (o = n));
      }
      return o;
    }
  }
  class y extends Map {
    constructor(t, n = x) {
      if (
        (super(),
        Object.defineProperties(this, {
          _intern: { value: new Map() },
          _key: { value: n },
        }),
        null != t)
      )
        for (const [n, e] of t) this.set(n, e);
    }
    get(t) {
      return super.get(_(this, t));
    }
    has(t) {
      return super.has(_(this, t));
    }
    set(t, n) {
      return super.set(b(this, t), n);
    }
    delete(t) {
      return super.delete(m(this, t));
    }
  }
  class v extends Set {
    constructor(t, n = x) {
      if (
        (super(),
        Object.defineProperties(this, {
          _intern: { value: new Map() },
          _key: { value: n },
        }),
        null != t)
      )
        for (const n of t) this.add(n);
    }
    has(t) {
      return super.has(_(this, t));
    }
    add(t) {
      return super.add(b(this, t));
    }
    delete(t) {
      return super.delete(m(this, t));
    }
  }
  function _({ _intern: t, _key: n }, e) {
    const r = n(e);
    return t.has(r) ? t.get(r) : e;
  }
  function b({ _intern: t, _key: n }, e) {
    const r = n(e);
    return t.has(r) ? t.get(r) : (t.set(r, e), e);
  }
  function m({ _intern: t, _key: n }, e) {
    const r = n(e);
    return t.has(r) && ((e = t.get(e)), t.delete(r)), e;
  }
  function x(t) {
    return null !== t && "object" == typeof t ? t.valueOf() : t;
  }
  function w(t) {
    return t;
  }
  function M(t, ...n) {
    return N(t, w, w, n);
  }
  function A(t, ...n) {
    return N(t, Array.from, w, n);
  }
  function T(t, n) {
    for (let e = 1, r = n.length; e < r; ++e)
      t = t.flatMap((t) => t.pop().map(([n, e]) => [...t, n, e]));
    return t;
  }
  function S(t, n, ...e) {
    return N(t, w, n, e);
  }
  function E(t, n, ...e) {
    return N(t, Array.from, n, e);
  }
  function k(t) {
    if (1 !== t.length) throw new Error("duplicate key");
    return t[0];
  }
  function N(t, n, e, r) {
    return (function t(i, o) {
      if (o >= r.length) return e(i);
      const a = new y(),
        u = r[o++];
      let c = -1;
      for (const t of i) {
        const n = u(t, ++c, i),
          e = a.get(n);
        e ? e.push(t) : a.set(n, [t]);
      }
      for (const [n, e] of a) a.set(n, t(e, o));
      return n(a);
    })(t, 0);
  }
  function C(t, n) {
    return Array.from(n, (n) => t[n]);
  }
  function P(t, ...e) {
    if ("function" != typeof t[Symbol.iterator])
      throw new TypeError("values is not iterable");
    t = Array.from(t);
    let [r = n] = e;
    if (1 === r.length || e.length > 1) {
      const i = Uint32Array.from(t, (t, n) => n);
      return (
        e.length > 1
          ? ((e = e.map((n) => t.map(n))),
            i.sort((t, r) => {
              for (const i of e) {
                const e = n(i[t], i[r]);
                if (e) return e;
              }
            }))
          : ((r = t.map(r)), i.sort((t, e) => n(r[t], r[e]))),
        C(t, i)
      );
    }
    return t.sort(r);
  }
  var z = Array.prototype.slice;
  function D(t) {
    return function () {
      return t;
    };
  }
  var q = Math.sqrt(50),
    R = Math.sqrt(10),
    F = Math.sqrt(2);
  function O(t, n, e) {
    var r,
      i,
      o,
      a,
      u = -1;
    if (((e = +e), (t = +t) === (n = +n) && e > 0)) return [t];
    if (
      ((r = n < t) && ((i = t), (t = n), (n = i)),
      0 === (a = I(t, n, e)) || !isFinite(a))
    )
      return [];
    if (a > 0) {
      let e = Math.round(t / a),
        r = Math.round(n / a);
      for (
        e * a < t && ++e, r * a > n && --r, o = new Array((i = r - e + 1));
        ++u < i;

      )
        o[u] = (e + u) * a;
    } else {
      a = -a;
      let e = Math.round(t * a),
        r = Math.round(n * a);
      for (
        e / a < t && ++e, r / a > n && --r, o = new Array((i = r - e + 1));
        ++u < i;

      )
        o[u] = (e + u) / a;
    }
    return r && o.reverse(), o;
  }
  function I(t, n, e) {
    var r = (n - t) / Math.max(0, e),
      i = Math.floor(Math.log(r) / Math.LN10),
      o = r / Math.pow(10, i);
    return i >= 0
      ? (o >= q ? 10 : o >= R ? 5 : o >= F ? 2 : 1) * Math.pow(10, i)
      : -Math.pow(10, -i) / (o >= q ? 10 : o >= R ? 5 : o >= F ? 2 : 1);
  }
  function U(t, n, e) {
    var r = Math.abs(n - t) / Math.max(0, e),
      i = Math.pow(10, Math.floor(Math.log(r) / Math.LN10)),
      o = r / i;
    return (
      o >= q ? (i *= 10) : o >= R ? (i *= 5) : o >= F && (i *= 2),
      n < t ? -i : i
    );
  }
  function B(t, n, e) {
    let r;
    for (;;) {
      const i = I(t, n, e);
      if (i === r || 0 === i || !isFinite(i)) return [t, n];
      i > 0
        ? ((t = Math.floor(t / i) * i), (n = Math.ceil(n / i) * i))
        : i < 0 && ((t = Math.ceil(t * i) / i), (n = Math.floor(n * i) / i)),
        (r = i);
    }
  }
  function Y(t) {
    return Math.ceil(Math.log(c(t)) / Math.LN2) + 1;
  }
  function L() {
    var t = w,
      n = p,
      e = Y;
    function r(r) {
      Array.isArray(r) || (r = Array.from(r));
      var i,
        a,
        u = r.length,
        c = new Array(u);
      for (i = 0; i < u; ++i) c[i] = t(r[i], i, r);
      var f = n(c),
        s = f[0],
        l = f[1],
        h = e(c, s, l);
      if (!Array.isArray(h)) {
        const t = l,
          e = +h;
        if (
          (n === p && ([s, l] = B(s, l, e)),
          (h = O(s, l, e))[h.length - 1] >= l)
        )
          if (t >= l && n === p) {
            const t = I(s, l, e);
            isFinite(t) &&
              (t > 0
                ? (l = (Math.floor(l / t) + 1) * t)
                : t < 0 && (l = (Math.ceil(l * -t) + 1) / -t));
          } else h.pop();
      }
      for (var d = h.length; h[0] <= s; ) h.shift(), --d;
      for (; h[d - 1] > l; ) h.pop(), --d;
      var g,
        y = new Array(d + 1);
      for (i = 0; i <= d; ++i)
        ((g = y[i] = []).x0 = i > 0 ? h[i - 1] : s), (g.x1 = i < d ? h[i] : l);
      for (i = 0; i < u; ++i)
        null != (a = c[i]) && s <= a && a <= l && y[o(h, a, 0, d)].push(r[i]);
      return y;
    }
    return (
      (r.value = function (n) {
        return arguments.length
          ? ((t = "function" == typeof n ? n : D(n)), r)
          : t;
      }),
      (r.domain = function (t) {
        return arguments.length
          ? ((n = "function" == typeof t ? t : D([t[0], t[1]])), r)
          : n;
      }),
      (r.thresholds = function (t) {
        return arguments.length
          ? ((e =
              "function" == typeof t
                ? t
                : Array.isArray(t)
                ? D(z.call(t))
                : D(t)),
            r)
          : e;
      }),
      r
    );
  }
  function j(t, n) {
    let e;
    if (void 0 === n)
      for (const n of t)
        null != n && (e < n || (void 0 === e && n >= n)) && (e = n);
    else {
      let r = -1;
      for (let i of t)
        null != (i = n(i, ++r, t)) &&
          (e < i || (void 0 === e && i >= i)) &&
          (e = i);
    }
    return e;
  }
  function H(t, n) {
    let e;
    if (void 0 === n)
      for (const n of t)
        null != n && (e > n || (void 0 === e && n >= n)) && (e = n);
    else {
      let r = -1;
      for (let i of t)
        null != (i = n(i, ++r, t)) &&
          (e > i || (void 0 === e && i >= i)) &&
          (e = i);
    }
    return e;
  }
  function X(t, e, r = 0, i = t.length - 1, o = n) {
    for (; i > r; ) {
      if (i - r > 600) {
        const n = i - r + 1,
          a = e - r + 1,
          u = Math.log(n),
          c = 0.5 * Math.exp((2 * u) / 3),
          f = 0.5 * Math.sqrt((u * c * (n - c)) / n) * (a - n / 2 < 0 ? -1 : 1);
        X(
          t,
          e,
          Math.max(r, Math.floor(e - (a * c) / n + f)),
          Math.min(i, Math.floor(e + ((n - a) * c) / n + f)),
          o
        );
      }
      const n = t[e];
      let a = r,
        u = i;
      for (G(t, r, e), o(t[i], n) > 0 && G(t, r, i); a < u; ) {
        for (G(t, a, u), ++a, --u; o(t[a], n) < 0; ) ++a;
        for (; o(t[u], n) > 0; ) --u;
      }
      0 === o(t[r], n) ? G(t, r, u) : (++u, G(t, u, i)),
        u <= e && (r = u + 1),
        e <= u && (i = u - 1);
    }
    return t;
  }
  function G(t, n, e) {
    const r = t[n];
    (t[n] = t[e]), (t[e] = r);
  }
  function V(t, n, e) {
    if (
      (r = (t = Float64Array.from(
        (function* (t, n) {
          if (void 0 === n)
            for (let n of t) null != n && (n = +n) >= n && (yield n);
          else {
            let e = -1;
            for (let r of t)
              null != (r = n(r, ++e, t)) && (r = +r) >= r && (yield r);
          }
        })(t, e)
      )).length)
    ) {
      if ((n = +n) <= 0 || r < 2) return H(t);
      if (n >= 1) return j(t);
      var r,
        i = (r - 1) * n,
        o = Math.floor(i),
        a = j(X(t, o).subarray(0, o + 1));
      return a + (H(t.subarray(o + 1)) - a) * (i - o);
    }
  }
  function $(t, n, e = r) {
    if ((i = t.length)) {
      if ((n = +n) <= 0 || i < 2) return +e(t[0], 0, t);
      if (n >= 1) return +e(t[i - 1], i - 1, t);
      var i,
        o = (i - 1) * n,
        a = Math.floor(o),
        u = +e(t[a], a, t);
      return u + (+e(t[a + 1], a + 1, t) - u) * (o - a);
    }
  }
  function W(t, n) {
    let e,
      r = -1,
      i = -1;
    if (void 0 === n)
      for (const n of t)
        ++i,
          null != n &&
            (e < n || (void 0 === e && n >= n)) &&
            ((e = n), (r = i));
    else
      for (let o of t)
        null != (o = n(o, ++i, t)) &&
          (e < o || (void 0 === e && o >= o)) &&
          ((e = o), (r = i));
    return r;
  }
  function Z(t) {
    return Array.from(
      (function* (t) {
        for (const n of t) yield* n;
      })(t)
    );
  }
  function K(t, n) {
    let e,
      r = -1,
      i = -1;
    if (void 0 === n)
      for (const n of t)
        ++i,
          null != n &&
            (e > n || (void 0 === e && n >= n)) &&
            ((e = n), (r = i));
    else
      for (let o of t)
        null != (o = n(o, ++i, t)) &&
          (e > o || (void 0 === e && o >= o)) &&
          ((e = o), (r = i));
    return r;
  }
  function Q(t, n) {
    return [t, n];
  }
  function J(t, n, e) {
    (t = +t),
      (n = +n),
      (e = (i = arguments.length) < 2 ? ((n = t), (t = 0), 1) : i < 3 ? 1 : +e);
    for (
      var r = -1, i = 0 | Math.max(0, Math.ceil((n - t) / e)), o = new Array(i);
      ++r < i;

    )
      o[r] = t + r * e;
    return o;
  }
  function tt(t, e = n) {
    if (1 === e.length) return K(t, e);
    let r,
      i = -1,
      o = -1;
    for (const n of t)
      ++o, (i < 0 ? 0 === e(n, n) : e(n, r) < 0) && ((r = n), (i = o));
    return i;
  }
  var nt = et(Math.random);
  function et(t) {
    return function (n, e = 0, r = n.length) {
      let i = r - (e = +e);
      for (; i; ) {
        const r = (t() * i--) | 0,
          o = n[i + e];
        (n[i + e] = n[r + e]), (n[r + e] = o);
      }
      return n;
    };
  }
  function rt(t) {
    if (!(i = t.length)) return [];
    for (var n = -1, e = H(t, it), r = new Array(e); ++n < e; )
      for (var i, o = -1, a = (r[n] = new Array(i)); ++o < i; ) a[o] = t[o][n];
    return r;
  }
  function it(t) {
    return t.length;
  }
  function ot(t) {
    return t instanceof Set ? t : new Set(t);
  }
  function at(t, n) {
    const e = t[Symbol.iterator](),
      r = new Set();
    for (const t of n) {
      if (r.has(t)) continue;
      let n, i;
      for (; ({ value: n, done: i } = e.next()); ) {
        if (i) return !1;
        if ((r.add(n), Object.is(t, n))) break;
      }
    }
    return !0;
  }
  function ut(t) {
    return t;
  }
  var ct = 1e-6;
  function ft(t) {
    return "translate(" + t + ",0)";
  }
  function st(t) {
    return "translate(0," + t + ")";
  }
  function lt(t) {
    return (n) => +t(n);
  }
  function ht(t, n) {
    return (
      (n = Math.max(0, t.bandwidth() - 2 * n) / 2),
      t.round() && (n = Math.round(n)),
      (e) => +t(e) + n
    );
  }
  function dt() {
    return !this.__axis;
  }
  function pt(t, n) {
    var e = [],
      r = null,
      i = null,
      o = 6,
      a = 6,
      u = 3,
      c = "undefined" != typeof window && window.devicePixelRatio > 1 ? 0 : 0.5,
      f = 1 === t || 4 === t ? -1 : 1,
      s = 4 === t || 2 === t ? "x" : "y",
      l = 1 === t || 3 === t ? ft : st;
    function h(h) {
      var d = null == r ? (n.ticks ? n.ticks.apply(n, e) : n.domain()) : r,
        p = null == i ? (n.tickFormat ? n.tickFormat.apply(n, e) : ut) : i,
        g = Math.max(o, 0) + u,
        y = n.range(),
        v = +y[0] + c,
        _ = +y[y.length - 1] + c,
        b = (n.bandwidth ? ht : lt)(n.copy(), c),
        m = h.selection ? h.selection() : h,
        x = m.selectAll(".domain").data([null]),
        w = m.selectAll(".tick").data(d, n).order(),
        M = w.exit(),
        A = w.enter().append("g").attr("class", "tick"),
        T = w.select("line"),
        S = w.select("text");
      (x = x.merge(
        x
          .enter()
          .insert("path", ".tick")
          .attr("class", "domain")
          .attr("stroke", "currentColor")
      )),
        (w = w.merge(A)),
        (T = T.merge(
          A.append("line")
            .attr("stroke", "currentColor")
            .attr(s + "2", f * o)
        )),
        (S = S.merge(
          A.append("text")
            .attr("fill", "currentColor")
            .attr(s, f * g)
            .attr("dy", 1 === t ? "0em" : 3 === t ? "0.71em" : "0.32em")
        )),
        h !== m &&
          ((x = x.transition(h)),
          (w = w.transition(h)),
          (T = T.transition(h)),
          (S = S.transition(h)),
          (M = M.transition(h)
            .attr("opacity", ct)
            .attr("transform", function (t) {
              return isFinite((t = b(t)))
                ? l(t + c)
                : this.getAttribute("transform");
            })),
          A.attr("opacity", ct).attr("transform", function (t) {
            var n = this.parentNode.__axis;
            return l((n && isFinite((n = n(t))) ? n : b(t)) + c);
          })),
        M.remove(),
        x.attr(
          "d",
          4 === t || 2 === t
            ? a
              ? "M" + f * a + "," + v + "H" + c + "V" + _ + "H" + f * a
              : "M" + c + "," + v + "V" + _
            : a
            ? "M" + v + "," + f * a + "V" + c + "H" + _ + "V" + f * a
            : "M" + v + "," + c + "H" + _
        ),
        w.attr("opacity", 1).attr("transform", function (t) {
          return l(b(t) + c);
        }),
        T.attr(s + "2", f * o),
        S.attr(s, f * g).text(p),
        m
          .filter(dt)
          .attr("fill", "none")
          .attr("font-size", 10)
          .attr("font-family", "sans-serif")
          .attr("text-anchor", 2 === t ? "start" : 4 === t ? "end" : "middle"),
        m.each(function () {
          this.__axis = b;
        });
    }
    return (
      (h.scale = function (t) {
        return arguments.length ? ((n = t), h) : n;
      }),
      (h.ticks = function () {
        return (e = Array.from(arguments)), h;
      }),
      (h.tickArguments = function (t) {
        return arguments.length
          ? ((e = null == t ? [] : Array.from(t)), h)
          : e.slice();
      }),
      (h.tickValues = function (t) {
        return arguments.length
          ? ((r = null == t ? null : Array.from(t)), h)
          : r && r.slice();
      }),
      (h.tickFormat = function (t) {
        return arguments.length ? ((i = t), h) : i;
      }),
      (h.tickSize = function (t) {
        return arguments.length ? ((o = a = +t), h) : o;
      }),
      (h.tickSizeInner = function (t) {
        return arguments.length ? ((o = +t), h) : o;
      }),
      (h.tickSizeOuter = function (t) {
        return arguments.length ? ((a = +t), h) : a;
      }),
      (h.tickPadding = function (t) {
        return arguments.length ? ((u = +t), h) : u;
      }),
      (h.offset = function (t) {
        return arguments.length ? ((c = +t), h) : c;
      }),
      h
    );
  }
  var gt = { value: () => {} };
  function yt() {
    for (var t, n = 0, e = arguments.length, r = {}; n < e; ++n) {
      if (!(t = arguments[n] + "") || t in r || /[\s.]/.test(t))
        throw new Error("illegal type: " + t);
      r[t] = [];
    }
    return new vt(r);
  }
  function vt(t) {
    this._ = t;
  }
  function _t(t, n) {
    return t
      .trim()
      .split(/^|\s+/)
      .map(function (t) {
        var e = "",
          r = t.indexOf(".");
        if (
          (r >= 0 && ((e = t.slice(r + 1)), (t = t.slice(0, r))),
          t && !n.hasOwnProperty(t))
        )
          throw new Error("unknown type: " + t);
        return { type: t, name: e };
      });
  }
  function bt(t, n) {
    for (var e, r = 0, i = t.length; r < i; ++r)
      if ((e = t[r]).name === n) return e.value;
  }
  function mt(t, n, e) {
    for (var r = 0, i = t.length; r < i; ++r)
      if (t[r].name === n) {
        (t[r] = gt), (t = t.slice(0, r).concat(t.slice(r + 1)));
        break;
      }
    return null != e && t.push({ name: n, value: e }), t;
  }
  vt.prototype = yt.prototype = {
    constructor: vt,
    on: function (t, n) {
      var e,
        r = this._,
        i = _t(t + "", r),
        o = -1,
        a = i.length;
      if (!(arguments.length < 2)) {
        if (null != n && "function" != typeof n)
          throw new Error("invalid callback: " + n);
        for (; ++o < a; )
          if ((e = (t = i[o]).type)) r[e] = mt(r[e], t.name, n);
          else if (null == n) for (e in r) r[e] = mt(r[e], t.name, null);
        return this;
      }
      for (; ++o < a; )
        if ((e = (t = i[o]).type) && (e = bt(r[e], t.name))) return e;
    },
    copy: function () {
      var t = {},
        n = this._;
      for (var e in n) t[e] = n[e].slice();
      return new vt(t);
    },
    call: function (t, n) {
      if ((e = arguments.length - 2) > 0)
        for (var e, r, i = new Array(e), o = 0; o < e; ++o)
          i[o] = arguments[o + 2];
      if (!this._.hasOwnProperty(t)) throw new Error("unknown type: " + t);
      for (o = 0, e = (r = this._[t]).length; o < e; ++o)
        r[o].value.apply(n, i);
    },
    apply: function (t, n, e) {
      if (!this._.hasOwnProperty(t)) throw new Error("unknown type: " + t);
      for (var r = this._[t], i = 0, o = r.length; i < o; ++i)
        r[i].value.apply(n, e);
    },
  };
  var xt = "http://www.w3.org/1999/xhtml",
    wt = {
      svg: "http://www.w3.org/2000/svg",
      xhtml: xt,
      xlink: "http://www.w3.org/1999/xlink",
      xml: "http://www.w3.org/XML/1998/namespace",
      xmlns: "http://www.w3.org/2000/xmlns/",
    };
  function Mt(t) {
    var n = (t += ""),
      e = n.indexOf(":");
    return (
      e >= 0 && "xmlns" !== (n = t.slice(0, e)) && (t = t.slice(e + 1)),
      wt.hasOwnProperty(n) ? { space: wt[n], local: t } : t
    );
  }
  function At(t) {
    return function () {
      var n = this.ownerDocument,
        e = this.namespaceURI;
      return e === xt && n.documentElement.namespaceURI === xt
        ? n.createElement(t)
        : n.createElementNS(e, t);
    };
  }
  function Tt(t) {
    return function () {
      return this.ownerDocument.createElementNS(t.space, t.local);
    };
  }
  function St(t) {
    var n = Mt(t);
    return (n.local ? Tt : At)(n);
  }
  function Et() {}
  function kt(t) {
    return null == t
      ? Et
      : function () {
          return this.querySelector(t);
        };
  }
  function Nt(t) {
    return null == t ? [] : Array.isArray(t) ? t : Array.from(t);
  }
  function Ct() {
    return [];
  }
  function Pt(t) {
    return null == t
      ? Ct
      : function () {
          return this.querySelectorAll(t);
        };
  }
  function zt(t) {
    return function () {
      return this.matches(t);
    };
  }
  function Dt(t) {
    return function (n) {
      return n.matches(t);
    };
  }
  var qt = Array.prototype.find;
  function Rt() {
    return this.firstElementChild;
  }
  var Ft = Array.prototype.filter;
  function Ot() {
    return Array.from(this.children);
  }
  function It(t) {
    return new Array(t.length);
  }
  function Ut(t, n) {
    (this.ownerDocument = t.ownerDocument),
      (this.namespaceURI = t.namespaceURI),
      (this._next = null),
      (this._parent = t),
      (this.__data__ = n);
  }
  function Bt(t) {
    return function () {
      return t;
    };
  }
  function Yt(t, n, e, r, i, o) {
    for (var a, u = 0, c = n.length, f = o.length; u < f; ++u)
      (a = n[u]) ? ((a.__data__ = o[u]), (r[u] = a)) : (e[u] = new Ut(t, o[u]));
    for (; u < c; ++u) (a = n[u]) && (i[u] = a);
  }
  function Lt(t, n, e, r, i, o, a) {
    var u,
      c,
      f,
      s = new Map(),
      l = n.length,
      h = o.length,
      d = new Array(l);
    for (u = 0; u < l; ++u)
      (c = n[u]) &&
        ((d[u] = f = a.call(c, c.__data__, u, n) + ""),
        s.has(f) ? (i[u] = c) : s.set(f, c));
    for (u = 0; u < h; ++u)
      (f = a.call(t, o[u], u, o) + ""),
        (c = s.get(f))
          ? ((r[u] = c), (c.__data__ = o[u]), s.delete(f))
          : (e[u] = new Ut(t, o[u]));
    for (u = 0; u < l; ++u) (c = n[u]) && s.get(d[u]) === c && (i[u] = c);
  }
  function jt(t) {
    return t.__data__;
  }
  function Ht(t) {
    return "object" == typeof t && "length" in t ? t : Array.from(t);
  }
  function Xt(t, n) {
    return t < n ? -1 : t > n ? 1 : t >= n ? 0 : NaN;
  }
  function Gt(t) {
    return function () {
      this.removeAttribute(t);
    };
  }
  function Vt(t) {
    return function () {
      this.removeAttributeNS(t.space, t.local);
    };
  }
  function $t(t, n) {
    return function () {
      this.setAttribute(t, n);
    };
  }
  function Wt(t, n) {
    return function () {
      this.setAttributeNS(t.space, t.local, n);
    };
  }
  function Zt(t, n) {
    return function () {
      var e = n.apply(this, arguments);
      null == e ? this.removeAttribute(t) : this.setAttribute(t, e);
    };
  }
  function Kt(t, n) {
    return function () {
      var e = n.apply(this, arguments);
      null == e
        ? this.removeAttributeNS(t.space, t.local)
        : this.setAttributeNS(t.space, t.local, e);
    };
  }
  function Qt(t) {
    return (
      (t.ownerDocument && t.ownerDocument.defaultView) ||
      (t.document && t) ||
      t.defaultView
    );
  }
  function Jt(t) {
    return function () {
      this.style.removeProperty(t);
    };
  }
  function tn(t, n, e) {
    return function () {
      this.style.setProperty(t, n, e);
    };
  }
  function nn(t, n, e) {
    return function () {
      var r = n.apply(this, arguments);
      null == r
        ? this.style.removeProperty(t)
        : this.style.setProperty(t, r, e);
    };
  }
  function en(t, n) {
    return (
      t.style.getPropertyValue(n) ||
      Qt(t).getComputedStyle(t, null).getPropertyValue(n)
    );
  }
  function rn(t) {
    return function () {
      delete this[t];
    };
  }
  function on(t, n) {
    return function () {
      this[t] = n;
    };
  }
  function an(t, n) {
    return function () {
      var e = n.apply(this, arguments);
      null == e ? delete this[t] : (this[t] = e);
    };
  }
  function un(t) {
    return t.trim().split(/^|\s+/);
  }
  function cn(t) {
    return t.classList || new fn(t);
  }
  function fn(t) {
    (this._node = t), (this._names = un(t.getAttribute("class") || ""));
  }
  function sn(t, n) {
    for (var e = cn(t), r = -1, i = n.length; ++r < i; ) e.add(n[r]);
  }
  function ln(t, n) {
    for (var e = cn(t), r = -1, i = n.length; ++r < i; ) e.remove(n[r]);
  }
  function hn(t) {
    return function () {
      sn(this, t);
    };
  }
  function dn(t) {
    return function () {
      ln(this, t);
    };
  }
  function pn(t, n) {
    return function () {
      (n.apply(this, arguments) ? sn : ln)(this, t);
    };
  }
  function gn() {
    this.textContent = "";
  }
  function yn(t) {
    return function () {
      this.textContent = t;
    };
  }
  function vn(t) {
    return function () {
      var n = t.apply(this, arguments);
      this.textContent = null == n ? "" : n;
    };
  }
  function _n() {
    this.innerHTML = "";
  }
  function bn(t) {
    return function () {
      this.innerHTML = t;
    };
  }
  function mn(t) {
    return function () {
      var n = t.apply(this, arguments);
      this.innerHTML = null == n ? "" : n;
    };
  }
  function xn() {
    this.nextSibling && this.parentNode.appendChild(this);
  }
  function wn() {
    this.previousSibling &&
      this.parentNode.insertBefore(this, this.parentNode.firstChild);
  }
  function Mn() {
    return null;
  }
  function An() {
    var t = this.parentNode;
    t && t.removeChild(this);
  }
  function Tn() {
    var t = this.cloneNode(!1),
      n = this.parentNode;
    return n ? n.insertBefore(t, this.nextSibling) : t;
  }
  function Sn() {
    var t = this.cloneNode(!0),
      n = this.parentNode;
    return n ? n.insertBefore(t, this.nextSibling) : t;
  }
  function En(t) {
    return t
      .trim()
      .split(/^|\s+/)
      .map(function (t) {
        var n = "",
          e = t.indexOf(".");
        return (
          e >= 0 && ((n = t.slice(e + 1)), (t = t.slice(0, e))),
          { type: t, name: n }
        );
      });
  }
  function kn(t) {
    return function () {
      var n = this.__on;
      if (n) {
        for (var e, r = 0, i = -1, o = n.length; r < o; ++r)
          (e = n[r]),
            (t.type && e.type !== t.type) || e.name !== t.name
              ? (n[++i] = e)
              : this.removeEventListener(e.type, e.listener, e.options);
        ++i ? (n.length = i) : delete this.__on;
      }
    };
  }
  function Nn(t, n, e) {
    return function () {
      var r,
        i = this.__on,
        o = (function (t) {
          return function (n) {
            t.call(this, n, this.__data__);
          };
        })(n);
      if (i)
        for (var a = 0, u = i.length; a < u; ++a)
          if ((r = i[a]).type === t.type && r.name === t.name)
            return (
              this.removeEventListener(r.type, r.listener, r.options),
              this.addEventListener(r.type, (r.listener = o), (r.options = e)),
              void (r.value = n)
            );
      this.addEventListener(t.type, o, e),
        (r = { type: t.type, name: t.name, value: n, listener: o, options: e }),
        i ? i.push(r) : (this.__on = [r]);
    };
  }
  function Cn(t, n, e) {
    var r = Qt(t),
      i = r.CustomEvent;
    "function" == typeof i
      ? (i = new i(n, e))
      : ((i = r.document.createEvent("Event")),
        e
          ? (i.initEvent(n, e.bubbles, e.cancelable), (i.detail = e.detail))
          : i.initEvent(n, !1, !1)),
      t.dispatchEvent(i);
  }
  function Pn(t, n) {
    return function () {
      return Cn(this, t, n);
    };
  }
  function zn(t, n) {
    return function () {
      return Cn(this, t, n.apply(this, arguments));
    };
  }
  (Ut.prototype = {
    constructor: Ut,
    appendChild: function (t) {
      return this._parent.insertBefore(t, this._next);
    },
    insertBefore: function (t, n) {
      return this._parent.insertBefore(t, n);
    },
    querySelector: function (t) {
      return this._parent.querySelector(t);
    },
    querySelectorAll: function (t) {
      return this._parent.querySelectorAll(t);
    },
  }),
    (fn.prototype = {
      add: function (t) {
        this._names.indexOf(t) < 0 &&
          (this._names.push(t),
          this._node.setAttribute("class", this._names.join(" ")));
      },
      remove: function (t) {
        var n = this._names.indexOf(t);
        n >= 0 &&
          (this._names.splice(n, 1),
          this._node.setAttribute("class", this._names.join(" ")));
      },
      contains: function (t) {
        return this._names.indexOf(t) >= 0;
      },
    });
  var Dn = [null];
  function qn(t, n) {
    (this._groups = t), (this._parents = n);
  }
  function Rn() {
    return new qn([[document.documentElement]], Dn);
  }
  function Fn(t) {
    return "string" == typeof t
      ? new qn([[document.querySelector(t)]], [document.documentElement])
      : new qn([[t]], Dn);
  }
  qn.prototype = Rn.prototype = {
    constructor: qn,
    select: function (t) {
      "function" != typeof t && (t = kt(t));
      for (
        var n = this._groups, e = n.length, r = new Array(e), i = 0;
        i < e;
        ++i
      )
        for (
          var o, a, u = n[i], c = u.length, f = (r[i] = new Array(c)), s = 0;
          s < c;
          ++s
        )
          (o = u[s]) &&
            (a = t.call(o, o.__data__, s, u)) &&
            ("__data__" in o && (a.__data__ = o.__data__), (f[s] = a));
      return new qn(r, this._parents);
    },
    selectAll: function (t) {
      t =
        "function" == typeof t
          ? (function (t) {
              return function () {
                return Nt(t.apply(this, arguments));
              };
            })(t)
          : Pt(t);
      for (
        var n = this._groups, e = n.length, r = [], i = [], o = 0;
        o < e;
        ++o
      )
        for (var a, u = n[o], c = u.length, f = 0; f < c; ++f)
          (a = u[f]) && (r.push(t.call(a, a.__data__, f, u)), i.push(a));
      return new qn(r, i);
    },
    selectChild: function (t) {
      return this.select(
        null == t
          ? Rt
          : (function (t) {
              return function () {
                return qt.call(this.children, t);
              };
            })("function" == typeof t ? t : Dt(t))
      );
    },
    selectChildren: function (t) {
      return this.selectAll(
        null == t
          ? Ot
          : (function (t) {
              return function () {
                return Ft.call(this.children, t);
              };
            })("function" == typeof t ? t : Dt(t))
      );
    },
    filter: function (t) {
      "function" != typeof t && (t = zt(t));
      for (
        var n = this._groups, e = n.length, r = new Array(e), i = 0;
        i < e;
        ++i
      )
        for (var o, a = n[i], u = a.length, c = (r[i] = []), f = 0; f < u; ++f)
          (o = a[f]) && t.call(o, o.__data__, f, a) && c.push(o);
      return new qn(r, this._parents);
    },
    data: function (t, n) {
      if (!arguments.length) return Array.from(this, jt);
      var e = n ? Lt : Yt,
        r = this._parents,
        i = this._groups;
      "function" != typeof t && (t = Bt(t));
      for (
        var o = i.length,
          a = new Array(o),
          u = new Array(o),
          c = new Array(o),
          f = 0;
        f < o;
        ++f
      ) {
        var s = r[f],
          l = i[f],
          h = l.length,
          d = Ht(t.call(s, s && s.__data__, f, r)),
          p = d.length,
          g = (u[f] = new Array(p)),
          y = (a[f] = new Array(p)),
          v = (c[f] = new Array(h));
        e(s, l, g, y, v, d, n);
        for (var _, b, m = 0, x = 0; m < p; ++m)
          if ((_ = g[m])) {
            for (m >= x && (x = m + 1); !(b = y[x]) && ++x < p; );
            _._next = b || null;
          }
      }
      return ((a = new qn(a, r))._enter = u), (a._exit = c), a;
    },
    enter: function () {
      return new qn(this._enter || this._groups.map(It), this._parents);
    },
    exit: function () {
      return new qn(this._exit || this._groups.map(It), this._parents);
    },
    join: function (t, n, e) {
      var r = this.enter(),
        i = this,
        o = this.exit();
      return (
        "function" == typeof t
          ? (r = t(r)) && (r = r.selection())
          : (r = r.append(t + "")),
        null != n && (i = n(i)) && (i = i.selection()),
        null == e ? o.remove() : e(o),
        r && i ? r.merge(i).order() : i
      );
    },
    merge: function (t) {
      for (
        var n = t.selection ? t.selection() : t,
          e = this._groups,
          r = n._groups,
          i = e.length,
          o = r.length,
          a = Math.min(i, o),
          u = new Array(i),
          c = 0;
        c < a;
        ++c
      )
        for (
          var f,
            s = e[c],
            l = r[c],
            h = s.length,
            d = (u[c] = new Array(h)),
            p = 0;
          p < h;
          ++p
        )
          (f = s[p] || l[p]) && (d[p] = f);
      for (; c < i; ++c) u[c] = e[c];
      return new qn(u, this._parents);
    },
    selection: function () {
      return this;
    },
    order: function () {
      for (var t = this._groups, n = -1, e = t.length; ++n < e; )
        for (var r, i = t[n], o = i.length - 1, a = i[o]; --o >= 0; )
          (r = i[o]) &&
            (a &&
              4 ^ r.compareDocumentPosition(a) &&
              a.parentNode.insertBefore(r, a),
            (a = r));
      return this;
    },
    sort: function (t) {
      function n(n, e) {
        return n && e ? t(n.__data__, e.__data__) : !n - !e;
      }
      t || (t = Xt);
      for (
        var e = this._groups, r = e.length, i = new Array(r), o = 0;
        o < r;
        ++o
      ) {
        for (
          var a, u = e[o], c = u.length, f = (i[o] = new Array(c)), s = 0;
          s < c;
          ++s
        )
          (a = u[s]) && (f[s] = a);
        f.sort(n);
      }
      return new qn(i, this._parents).order();
    },
    call: function () {
      var t = arguments[0];
      return (arguments[0] = this), t.apply(null, arguments), this;
    },
    nodes: function () {
      return Array.from(this);
    },
    node: function () {
      for (var t = this._groups, n = 0, e = t.length; n < e; ++n)
        for (var r = t[n], i = 0, o = r.length; i < o; ++i) {
          var a = r[i];
          if (a) return a;
        }
      return null;
    },
    size: function () {
      let t = 0;
      for (const n of this) ++t;
      return t;
    },
    empty: function () {
      return !this.node();
    },
    each: function (t) {
      for (var n = this._groups, e = 0, r = n.length; e < r; ++e)
        for (var i, o = n[e], a = 0, u = o.length; a < u; ++a)
          (i = o[a]) && t.call(i, i.__data__, a, o);
      return this;
    },
    attr: function (t, n) {
      var e = Mt(t);
      if (arguments.length < 2) {
        var r = this.node();
        return e.local ? r.getAttributeNS(e.space, e.local) : r.getAttribute(e);
      }
      return this.each(
        (null == n
          ? e.local
            ? Vt
            : Gt
          : "function" == typeof n
          ? e.local
            ? Kt
            : Zt
          : e.local
          ? Wt
          : $t)(e, n)
      );
    },
    style: function (t, n, e) {
      return arguments.length > 1
        ? this.each(
            (null == n ? Jt : "function" == typeof n ? nn : tn)(
              t,
              n,
              null == e ? "" : e
            )
          )
        : en(this.node(), t);
    },
    property: function (t, n) {
      return arguments.length > 1
        ? this.each((null == n ? rn : "function" == typeof n ? an : on)(t, n))
        : this.node()[t];
    },
    classed: function (t, n) {
      var e = un(t + "");
      if (arguments.length < 2) {
        for (var r = cn(this.node()), i = -1, o = e.length; ++i < o; )
          if (!r.contains(e[i])) return !1;
        return !0;
      }
      return this.each(("function" == typeof n ? pn : n ? hn : dn)(e, n));
    },
    text: function (t) {
      return arguments.length
        ? this.each(null == t ? gn : ("function" == typeof t ? vn : yn)(t))
        : this.node().textContent;
    },
    html: function (t) {
      return arguments.length
        ? this.each(null == t ? _n : ("function" == typeof t ? mn : bn)(t))
        : this.node().innerHTML;
    },
    raise: function () {
      return this.each(xn);
    },
    lower: function () {
      return this.each(wn);
    },
    append: function (t) {
      var n = "function" == typeof t ? t : St(t);
      return this.select(function () {
        return this.appendChild(n.apply(this, arguments));
      });
    },
    insert: function (t, n) {
      var e = "function" == typeof t ? t : St(t),
        r = null == n ? Mn : "function" == typeof n ? n : kt(n);
      return this.select(function () {
        return this.insertBefore(
          e.apply(this, arguments),
          r.apply(this, arguments) || null
        );
      });
    },
    remove: function () {
      return this.each(An);
    },
    clone: function (t) {
      return this.select(t ? Sn : Tn);
    },
    datum: function (t) {
      return arguments.length
        ? this.property("__data__", t)
        : this.node().__data__;
    },
    on: function (t, n, e) {
      var r,
        i,
        o = En(t + ""),
        a = o.length;
      if (!(arguments.length < 2)) {
        for (u = n ? Nn : kn, r = 0; r < a; ++r) this.each(u(o[r], n, e));
        return this;
      }
      var u = this.node().__on;
      if (u)
        for (var c, f = 0, s = u.length; f < s; ++f)
          for (r = 0, c = u[f]; r < a; ++r)
            if ((i = o[r]).type === c.type && i.name === c.name) return c.value;
    },
    dispatch: function (t, n) {
      return this.each(("function" == typeof n ? zn : Pn)(t, n));
    },
    [Symbol.iterator]: function* () {
      for (var t = this._groups, n = 0, e = t.length; n < e; ++n)
        for (var r, i = t[n], o = 0, a = i.length; o < a; ++o)
          (r = i[o]) && (yield r);
    },
  };
  var On = 0;
  function In() {
    return new Un();
  }
  function Un() {
    this._ = "@" + (++On).toString(36);
  }
  function Bn(t) {
    let n;
    for (; (n = t.sourceEvent); ) t = n;
    return t;
  }
  function Yn(t, n) {
    if (((t = Bn(t)), void 0 === n && (n = t.currentTarget), n)) {
      var e = n.ownerSVGElement || n;
      if (e.createSVGPoint) {
        var r = e.createSVGPoint();
        return (
          (r.x = t.clientX),
          (r.y = t.clientY),
          [(r = r.matrixTransform(n.getScreenCTM().inverse())).x, r.y]
        );
      }
      if (n.getBoundingClientRect) {
        var i = n.getBoundingClientRect();
        return [
          t.clientX - i.left - n.clientLeft,
          t.clientY - i.top - n.clientTop,
        ];
      }
    }
    return [t.pageX, t.pageY];
  }
  Un.prototype = In.prototype = {
    constructor: Un,
    get: function (t) {
      for (var n = this._; !(n in t); ) if (!(t = t.parentNode)) return;
      return t[n];
    },
    set: function (t, n) {
      return (t[this._] = n);
    },
    remove: function (t) {
      return this._ in t && delete t[this._];
    },
    toString: function () {
      return this._;
    },
  };
  const Ln = { passive: !1 },
    jn = { capture: !0, passive: !1 };
  function Hn(t) {
    t.stopImmediatePropagation();
  }
  function Xn(t) {
    t.preventDefault(), t.stopImmediatePropagation();
  }
  function Gn(t) {
    var n = t.document.documentElement,
      e = Fn(t).on("dragstart.drag", Xn, jn);
    "onselectstart" in n
      ? e.on("selectstart.drag", Xn, jn)
      : ((n.__noselect = n.style.MozUserSelect),
        (n.style.MozUserSelect = "none"));
  }
  function Vn(t, n) {
    var e = t.document.documentElement,
      r = Fn(t).on("dragstart.drag", null);
    n &&
      (r.on("click.drag", Xn, jn),
      setTimeout(function () {
        r.on("click.drag", null);
      }, 0)),
      "onselectstart" in e
        ? r.on("selectstart.drag", null)
        : ((e.style.MozUserSelect = e.__noselect), delete e.__noselect);
  }
  var $n = (t) => () => t;
  function Wn(
    t,
    {
      sourceEvent: n,
      subject: e,
      target: r,
      identifier: i,
      active: o,
      x: a,
      y: u,
      dx: c,
      dy: f,
      dispatch: s,
    }
  ) {
    Object.defineProperties(this, {
      type: { value: t, enumerable: !0, configurable: !0 },
      sourceEvent: { value: n, enumerable: !0, configurable: !0 },
      subject: { value: e, enumerable: !0, configurable: !0 },
      target: { value: r, enumerable: !0, configurable: !0 },
      identifier: { value: i, enumerable: !0, configurable: !0 },
      active: { value: o, enumerable: !0, configurable: !0 },
      x: { value: a, enumerable: !0, configurable: !0 },
      y: { value: u, enumerable: !0, configurable: !0 },
      dx: { value: c, enumerable: !0, configurable: !0 },
      dy: { value: f, enumerable: !0, configurable: !0 },
      _: { value: s },
    });
  }
  function Zn(t) {
    return !t.ctrlKey && !t.button;
  }
  function Kn() {
    return this.parentNode;
  }
  function Qn(t, n) {
    return null == n ? { x: t.x, y: t.y } : n;
  }
  function Jn() {
    return navigator.maxTouchPoints || "ontouchstart" in this;
  }
  function te(t, n, e) {
    (t.prototype = n.prototype = e), (e.constructor = t);
  }
  function ne(t, n) {
    var e = Object.create(t.prototype);
    for (var r in n) e[r] = n[r];
    return e;
  }
  function ee() {}
  Wn.prototype.on = function () {
    var t = this._.on.apply(this._, arguments);
    return t === this._ ? this : t;
  };
  var re = 0.7,
    ie = 1 / re,
    oe = "\\s*([+-]?\\d+)\\s*",
    ae = "\\s*([+-]?\\d*\\.?\\d+(?:[eE][+-]?\\d+)?)\\s*",
    ue = "\\s*([+-]?\\d*\\.?\\d+(?:[eE][+-]?\\d+)?)%\\s*",
    ce = /^#([0-9a-f]{3,8})$/,
    fe = new RegExp("^rgb\\(" + [oe, oe, oe] + "\\)$"),
    se = new RegExp("^rgb\\(" + [ue, ue, ue] + "\\)$"),
    le = new RegExp("^rgba\\(" + [oe, oe, oe, ae] + "\\)$"),
    he = new RegExp("^rgba\\(" + [ue, ue, ue, ae] + "\\)$"),
    de = new RegExp("^hsl\\(" + [ae, ue, ue] + "\\)$"),
    pe = new RegExp("^hsla\\(" + [ae, ue, ue, ae] + "\\)$"),
    ge = {
      aliceblue: 15792383,
      antiquewhite: 16444375,
      aqua: 65535,
      aquamarine: 8388564,
      azure: 15794175,
      beige: 16119260,
      bisque: 16770244,
      black: 0,
      blanchedalmond: 16772045,
      blue: 255,
      blueviolet: 9055202,
      brown: 10824234,
      burlywood: 14596231,
      cadetblue: 6266528,
      chartreuse: 8388352,
      chocolate: 13789470,
      coral: 16744272,
      cornflowerblue: 6591981,
      cornsilk: 16775388,
      crimson: 14423100,
      cyan: 65535,
      darkblue: 139,
      darkcyan: 35723,
      darkgoldenrod: 12092939,
      darkgray: 11119017,
      darkgreen: 25600,
      darkgrey: 11119017,
      darkkhaki: 12433259,
      darkmagenta: 9109643,
      darkolivegreen: 5597999,
      darkorange: 16747520,
      darkorchid: 10040012,
      darkred: 9109504,
      darksalmon: 15308410,
      darkseagreen: 9419919,
      darkslateblue: 4734347,
      darkslategray: 3100495,
      darkslategrey: 3100495,
      darkturquoise: 52945,
      darkviolet: 9699539,
      deeppink: 16716947,
      deepskyblue: 49151,
      dimgray: 6908265,
      dimgrey: 6908265,
      dodgerblue: 2003199,
      firebrick: 11674146,
      floralwhite: 16775920,
      forestgreen: 2263842,
      fuchsia: 16711935,
      gainsboro: 14474460,
      ghostwhite: 16316671,
      gold: 16766720,
      goldenrod: 14329120,
      gray: 8421504,
      green: 32768,
      greenyellow: 11403055,
      grey: 8421504,
      honeydew: 15794160,
      hotpink: 16738740,
      indianred: 13458524,
      indigo: 4915330,
      ivory: 16777200,
      khaki: 15787660,
      lavender: 15132410,
      lavenderblush: 16773365,
      lawngreen: 8190976,
      lemonchiffon: 16775885,
      lightblue: 11393254,
      lightcoral: 15761536,
      lightcyan: 14745599,
      lightgoldenrodyellow: 16448210,
      lightgray: 13882323,
      lightgreen: 9498256,
      lightgrey: 13882323,
      lightpink: 16758465,
      lightsalmon: 16752762,
      lightseagreen: 2142890,
      lightskyblue: 8900346,
      lightslategray: 7833753,
      lightslategrey: 7833753,
      lightsteelblue: 11584734,
      lightyellow: 16777184,
      lime: 65280,
      limegreen: 3329330,
      linen: 16445670,
      magenta: 16711935,
      maroon: 8388608,
      mediumaquamarine: 6737322,
      mediumblue: 205,
      mediumorchid: 12211667,
      mediumpurple: 9662683,
      mediumseagreen: 3978097,
      mediumslateblue: 8087790,
      mediumspringgreen: 64154,
      mediumturquoise: 4772300,
      mediumvioletred: 13047173,
      midnightblue: 1644912,
      mintcream: 16121850,
      mistyrose: 16770273,
      moccasin: 16770229,
      navajowhite: 16768685,
      navy: 128,
      oldlace: 16643558,
      olive: 8421376,
      olivedrab: 7048739,
      orange: 16753920,
      orangered: 16729344,
      orchid: 14315734,
      palegoldenrod: 15657130,
      palegreen: 10025880,
      paleturquoise: 11529966,
      palevioletred: 14381203,
      papayawhip: 16773077,
      peachpuff: 16767673,
      peru: 13468991,
      pink: 16761035,
      plum: 14524637,
      powderblue: 11591910,
      purple: 8388736,
      rebeccapurple: 6697881,
      red: 16711680,
      rosybrown: 12357519,
      royalblue: 4286945,
      saddlebrown: 9127187,
      salmon: 16416882,
      sandybrown: 16032864,
      seagreen: 3050327,
      seashell: 16774638,
      sienna: 10506797,
      silver: 12632256,
      skyblue: 8900331,
      slateblue: 6970061,
      slategray: 7372944,
      slategrey: 7372944,
      snow: 16775930,
      springgreen: 65407,
      steelblue: 4620980,
      tan: 13808780,
      teal: 32896,
      thistle: 14204888,
      tomato: 16737095,
      turquoise: 4251856,
      violet: 15631086,
      wheat: 16113331,
      white: 16777215,
      whitesmoke: 16119285,
      yellow: 16776960,
      yellowgreen: 10145074,
    };
  function ye() {
    return this.rgb().formatHex();
  }
  function ve() {
    return this.rgb().formatRgb();
  }
  function _e(t) {
    var n, e;
    return (
      (t = (t + "").trim().toLowerCase()),
      (n = ce.exec(t))
        ? ((e = n[1].length),
          (n = parseInt(n[1], 16)),
          6 === e
            ? be(n)
            : 3 === e
            ? new Me(
                ((n >> 8) & 15) | ((n >> 4) & 240),
                ((n >> 4) & 15) | (240 & n),
                ((15 & n) << 4) | (15 & n),
                1
              )
            : 8 === e
            ? me(
                (n >> 24) & 255,
                (n >> 16) & 255,
                (n >> 8) & 255,
                (255 & n) / 255
              )
            : 4 === e
            ? me(
                ((n >> 12) & 15) | ((n >> 8) & 240),
                ((n >> 8) & 15) | ((n >> 4) & 240),
                ((n >> 4) & 15) | (240 & n),
                (((15 & n) << 4) | (15 & n)) / 255
              )
            : null)
        : (n = fe.exec(t))
        ? new Me(n[1], n[2], n[3], 1)
        : (n = se.exec(t))
        ? new Me((255 * n[1]) / 100, (255 * n[2]) / 100, (255 * n[3]) / 100, 1)
        : (n = le.exec(t))
        ? me(n[1], n[2], n[3], n[4])
        : (n = he.exec(t))
        ? me((255 * n[1]) / 100, (255 * n[2]) / 100, (255 * n[3]) / 100, n[4])
        : (n = de.exec(t))
        ? Ee(n[1], n[2] / 100, n[3] / 100, 1)
        : (n = pe.exec(t))
        ? Ee(n[1], n[2] / 100, n[3] / 100, n[4])
        : ge.hasOwnProperty(t)
        ? be(ge[t])
        : "transparent" === t
        ? new Me(NaN, NaN, NaN, 0)
        : null
    );
  }
  function be(t) {
    return new Me((t >> 16) & 255, (t >> 8) & 255, 255 & t, 1);
  }
  function me(t, n, e, r) {
    return r <= 0 && (t = n = e = NaN), new Me(t, n, e, r);
  }
  function xe(t) {
    return (
      t instanceof ee || (t = _e(t)),
      t ? new Me((t = t.rgb()).r, t.g, t.b, t.opacity) : new Me()
    );
  }
  function we(t, n, e, r) {
    return 1 === arguments.length ? xe(t) : new Me(t, n, e, null == r ? 1 : r);
  }
  function Me(t, n, e, r) {
    (this.r = +t), (this.g = +n), (this.b = +e), (this.opacity = +r);
  }
  function Ae() {
    return "#" + Se(this.r) + Se(this.g) + Se(this.b);
  }
  function Te() {
    var t = this.opacity;
    return (
      (1 === (t = isNaN(t) ? 1 : Math.max(0, Math.min(1, t)))
        ? "rgb("
        : "rgba(") +
      Math.max(0, Math.min(255, Math.round(this.r) || 0)) +
      ", " +
      Math.max(0, Math.min(255, Math.round(this.g) || 0)) +
      ", " +
      Math.max(0, Math.min(255, Math.round(this.b) || 0)) +
      (1 === t ? ")" : ", " + t + ")")
    );
  }
  function Se(t) {
    return (
      ((t = Math.max(0, Math.min(255, Math.round(t) || 0))) < 16 ? "0" : "") +
      t.toString(16)
    );
  }
  function Ee(t, n, e, r) {
    return (
      r <= 0
        ? (t = n = e = NaN)
        : e <= 0 || e >= 1
        ? (t = n = NaN)
        : n <= 0 && (t = NaN),
      new Ce(t, n, e, r)
    );
  }
  function ke(t) {
    if (t instanceof Ce) return new Ce(t.h, t.s, t.l, t.opacity);
    if ((t instanceof ee || (t = _e(t)), !t)) return new Ce();
    if (t instanceof Ce) return t;
    var n = (t = t.rgb()).r / 255,
      e = t.g / 255,
      r = t.b / 255,
      i = Math.min(n, e, r),
      o = Math.max(n, e, r),
      a = NaN,
      u = o - i,
      c = (o + i) / 2;
    return (
      u
        ? ((a =
            n === o
              ? (e - r) / u + 6 * (e < r)
              : e === o
              ? (r - n) / u + 2
              : (n - e) / u + 4),
          (u /= c < 0.5 ? o + i : 2 - o - i),
          (a *= 60))
        : (u = c > 0 && c < 1 ? 0 : a),
      new Ce(a, u, c, t.opacity)
    );
  }
  function Ne(t, n, e, r) {
    return 1 === arguments.length ? ke(t) : new Ce(t, n, e, null == r ? 1 : r);
  }
  function Ce(t, n, e, r) {
    (this.h = +t), (this.s = +n), (this.l = +e), (this.opacity = +r);
  }
  function Pe(t, n, e) {
    return (
      255 *
      (t < 60
        ? n + ((e - n) * t) / 60
        : t < 180
        ? e
        : t < 240
        ? n + ((e - n) * (240 - t)) / 60
        : n)
    );
  }
  te(ee, _e, {
    copy: function (t) {
      return Object.assign(new this.constructor(), this, t);
    },
    displayable: function () {
      return this.rgb().displayable();
    },
    hex: ye,
    formatHex: ye,
    formatHsl: function () {
      return ke(this).formatHsl();
    },
    formatRgb: ve,
    toString: ve,
  }),
    te(
      Me,
      we,
      ne(ee, {
        brighter: function (t) {
          return (
            (t = null == t ? ie : Math.pow(ie, t)),
            new Me(this.r * t, this.g * t, this.b * t, this.opacity)
          );
        },
        darker: function (t) {
          return (
            (t = null == t ? re : Math.pow(re, t)),
            new Me(this.r * t, this.g * t, this.b * t, this.opacity)
          );
        },
        rgb: function () {
          return this;
        },
        displayable: function () {
          return (
            -0.5 <= this.r &&
            this.r < 255.5 &&
            -0.5 <= this.g &&
            this.g < 255.5 &&
            -0.5 <= this.b &&
            this.b < 255.5 &&
            0 <= this.opacity &&
            this.opacity <= 1
          );
        },
        hex: Ae,
        formatHex: Ae,
        formatRgb: Te,
        toString: Te,
      })
    ),
    te(
      Ce,
      Ne,
      ne(ee, {
        brighter: function (t) {
          return (
            (t = null == t ? ie : Math.pow(ie, t)),
            new Ce(this.h, this.s, this.l * t, this.opacity)
          );
        },
        darker: function (t) {
          return (
            (t = null == t ? re : Math.pow(re, t)),
            new Ce(this.h, this.s, this.l * t, this.opacity)
          );
        },
        rgb: function () {
          var t = (this.h % 360) + 360 * (this.h < 0),
            n = isNaN(t) || isNaN(this.s) ? 0 : this.s,
            e = this.l,
            r = e + (e < 0.5 ? e : 1 - e) * n,
            i = 2 * e - r;
          return new Me(
            Pe(t >= 240 ? t - 240 : t + 120, i, r),
            Pe(t, i, r),
            Pe(t < 120 ? t + 240 : t - 120, i, r),
            this.opacity
          );
        },
        displayable: function () {
          return (
            ((0 <= this.s && this.s <= 1) || isNaN(this.s)) &&
            0 <= this.l &&
            this.l <= 1 &&
            0 <= this.opacity &&
            this.opacity <= 1
          );
        },
        formatHsl: function () {
          var t = this.opacity;
          return (
            (1 === (t = isNaN(t) ? 1 : Math.max(0, Math.min(1, t)))
              ? "hsl("
              : "hsla(") +
            (this.h || 0) +
            ", " +
            100 * (this.s || 0) +
            "%, " +
            100 * (this.l || 0) +
            "%" +
            (1 === t ? ")" : ", " + t + ")")
          );
        },
      })
    );
  const ze = Math.PI / 180,
    De = 180 / Math.PI,
    qe = 0.96422,
    Re = 0.82521,
    Fe = 4 / 29,
    Oe = 6 / 29,
    Ie = 3 * Oe * Oe;
  function Ue(t) {
    if (t instanceof Ye) return new Ye(t.l, t.a, t.b, t.opacity);
    if (t instanceof $e) return We(t);
    t instanceof Me || (t = xe(t));
    var n,
      e,
      r = Xe(t.r),
      i = Xe(t.g),
      o = Xe(t.b),
      a = Le((0.2225045 * r + 0.7168786 * i + 0.0606169 * o) / 1);
    return (
      r === i && i === o
        ? (n = e = a)
        : ((n = Le((0.4360747 * r + 0.3850649 * i + 0.1430804 * o) / qe)),
          (e = Le((0.0139322 * r + 0.0971045 * i + 0.7141733 * o) / Re))),
      new Ye(116 * a - 16, 500 * (n - a), 200 * (a - e), t.opacity)
    );
  }
  function Be(t, n, e, r) {
    return 1 === arguments.length ? Ue(t) : new Ye(t, n, e, null == r ? 1 : r);
  }
  function Ye(t, n, e, r) {
    (this.l = +t), (this.a = +n), (this.b = +e), (this.opacity = +r);
  }
  function Le(t) {
    return t > 0.008856451679035631 ? Math.pow(t, 1 / 3) : t / Ie + Fe;
  }
  function je(t) {
    return t > Oe ? t * t * t : Ie * (t - Fe);
  }
  function He(t) {
    return (
      255 * (t <= 0.0031308 ? 12.92 * t : 1.055 * Math.pow(t, 1 / 2.4) - 0.055)
    );
  }
  function Xe(t) {
    return (t /= 255) <= 0.04045
      ? t / 12.92
      : Math.pow((t + 0.055) / 1.055, 2.4);
  }
  function Ge(t) {
    if (t instanceof $e) return new $e(t.h, t.c, t.l, t.opacity);
    if ((t instanceof Ye || (t = Ue(t)), 0 === t.a && 0 === t.b))
      return new $e(NaN, 0 < t.l && t.l < 100 ? 0 : NaN, t.l, t.opacity);
    var n = Math.atan2(t.b, t.a) * De;
    return new $e(
      n < 0 ? n + 360 : n,
      Math.sqrt(t.a * t.a + t.b * t.b),
      t.l,
      t.opacity
    );
  }
  function Ve(t, n, e, r) {
    return 1 === arguments.length ? Ge(t) : new $e(t, n, e, null == r ? 1 : r);
  }
  function $e(t, n, e, r) {
    (this.h = +t), (this.c = +n), (this.l = +e), (this.opacity = +r);
  }
  function We(t) {
    if (isNaN(t.h)) return new Ye(t.l, 0, 0, t.opacity);
    var n = t.h * ze;
    return new Ye(t.l, Math.cos(n) * t.c, Math.sin(n) * t.c, t.opacity);
  }
  te(
    Ye,
    Be,
    ne(ee, {
      brighter: function (t) {
        return new Ye(
          this.l + 18 * (null == t ? 1 : t),
          this.a,
          this.b,
          this.opacity
        );
      },
      darker: function (t) {
        return new Ye(
          this.l - 18 * (null == t ? 1 : t),
          this.a,
          this.b,
          this.opacity
        );
      },
      rgb: function () {
        var t = (this.l + 16) / 116,
          n = isNaN(this.a) ? t : t + this.a / 500,
          e = isNaN(this.b) ? t : t - this.b / 200;
        return new Me(
          He(
            3.1338561 * (n = qe * je(n)) -
              1.6168667 * (t = 1 * je(t)) -
              0.4906146 * (e = Re * je(e))
          ),
          He(-0.9787684 * n + 1.9161415 * t + 0.033454 * e),
          He(0.0719453 * n - 0.2289914 * t + 1.4052427 * e),
          this.opacity
        );
      },
    })
  ),
    te(
      $e,
      Ve,
      ne(ee, {
        brighter: function (t) {
          return new $e(
            this.h,
            this.c,
            this.l + 18 * (null == t ? 1 : t),
            this.opacity
          );
        },
        darker: function (t) {
          return new $e(
            this.h,
            this.c,
            this.l - 18 * (null == t ? 1 : t),
            this.opacity
          );
        },
        rgb: function () {
          return We(this).rgb();
        },
      })
    );
  var Ze = -0.14861,
    Ke = 1.78277,
    Qe = -0.29227,
    Je = -0.90649,
    tr = 1.97294,
    nr = tr * Je,
    er = tr * Ke,
    rr = Ke * Qe - Je * Ze;
  function ir(t) {
    if (t instanceof ar) return new ar(t.h, t.s, t.l, t.opacity);
    t instanceof Me || (t = xe(t));
    var n = t.r / 255,
      e = t.g / 255,
      r = t.b / 255,
      i = (rr * r + nr * n - er * e) / (rr + nr - er),
      o = r - i,
      a = (tr * (e - i) - Qe * o) / Je,
      u = Math.sqrt(a * a + o * o) / (tr * i * (1 - i)),
      c = u ? Math.atan2(a, o) * De - 120 : NaN;
    return new ar(c < 0 ? c + 360 : c, u, i, t.opacity);
  }
  function or(t, n, e, r) {
    return 1 === arguments.length ? ir(t) : new ar(t, n, e, null == r ? 1 : r);
  }
  function ar(t, n, e, r) {
    (this.h = +t), (this.s = +n), (this.l = +e), (this.opacity = +r);
  }
  function ur(t, n, e, r, i) {
    var o = t * t,
      a = o * t;
    return (
      ((1 - 3 * t + 3 * o - a) * n +
        (4 - 6 * o + 3 * a) * e +
        (1 + 3 * t + 3 * o - 3 * a) * r +
        a * i) /
      6
    );
  }
  function cr(t) {
    var n = t.length - 1;
    return function (e) {
      var r = e <= 0 ? (e = 0) : e >= 1 ? ((e = 1), n - 1) : Math.floor(e * n),
        i = t[r],
        o = t[r + 1],
        a = r > 0 ? t[r - 1] : 2 * i - o,
        u = r < n - 1 ? t[r + 2] : 2 * o - i;
      return ur((e - r / n) * n, a, i, o, u);
    };
  }
  function fr(t) {
    var n = t.length;
    return function (e) {
      var r = Math.floor(((e %= 1) < 0 ? ++e : e) * n),
        i = t[(r + n - 1) % n],
        o = t[r % n],
        a = t[(r + 1) % n],
        u = t[(r + 2) % n];
      return ur((e - r / n) * n, i, o, a, u);
    };
  }
  te(
    ar,
    or,
    ne(ee, {
      brighter: function (t) {
        return (
          (t = null == t ? ie : Math.pow(ie, t)),
          new ar(this.h, this.s, this.l * t, this.opacity)
        );
      },
      darker: function (t) {
        return (
          (t = null == t ? re : Math.pow(re, t)),
          new ar(this.h, this.s, this.l * t, this.opacity)
        );
      },
      rgb: function () {
        var t = isNaN(this.h) ? 0 : (this.h + 120) * ze,
          n = +this.l,
          e = isNaN(this.s) ? 0 : this.s * n * (1 - n),
          r = Math.cos(t),
          i = Math.sin(t);
        return new Me(
          255 * (n + e * (Ze * r + Ke * i)),
          255 * (n + e * (Qe * r + Je * i)),
          255 * (n + e * (tr * r)),
          this.opacity
        );
      },
    })
  );
  var sr = (t) => () => t;
  function lr(t, n) {
    return function (e) {
      return t + e * n;
    };
  }
  function hr(t, n) {
    var e = n - t;
    return e
      ? lr(t, e > 180 || e < -180 ? e - 360 * Math.round(e / 360) : e)
      : sr(isNaN(t) ? n : t);
  }
  function dr(t) {
    return 1 == (t = +t)
      ? pr
      : function (n, e) {
          return e - n
            ? (function (t, n, e) {
                return (
                  (t = Math.pow(t, e)),
                  (n = Math.pow(n, e) - t),
                  (e = 1 / e),
                  function (r) {
                    return Math.pow(t + r * n, e);
                  }
                );
              })(n, e, t)
            : sr(isNaN(n) ? e : n);
        };
  }
  function pr(t, n) {
    var e = n - t;
    return e ? lr(t, e) : sr(isNaN(t) ? n : t);
  }
  var gr = (function t(n) {
    var e = dr(n);
    function r(t, n) {
      var r = e((t = we(t)).r, (n = we(n)).r),
        i = e(t.g, n.g),
        o = e(t.b, n.b),
        a = pr(t.opacity, n.opacity);
      return function (n) {
        return (
          (t.r = r(n)), (t.g = i(n)), (t.b = o(n)), (t.opacity = a(n)), t + ""
        );
      };
    }
    return (r.gamma = t), r;
  })(1);
  function yr(t) {
    return function (n) {
      var e,
        r,
        i = n.length,
        o = new Array(i),
        a = new Array(i),
        u = new Array(i);
      for (e = 0; e < i; ++e)
        (r = we(n[e])), (o[e] = r.r || 0), (a[e] = r.g || 0), (u[e] = r.b || 0);
      return (
        (o = t(o)),
        (a = t(a)),
        (u = t(u)),
        (r.opacity = 1),
        function (t) {
          return (r.r = o(t)), (r.g = a(t)), (r.b = u(t)), r + "";
        }
      );
    };
  }
  var vr = yr(cr),
    _r = yr(fr);
  function br(t, n) {
    n || (n = []);
    var e,
      r = t ? Math.min(n.length, t.length) : 0,
      i = n.slice();
    return function (o) {
      for (e = 0; e < r; ++e) i[e] = t[e] * (1 - o) + n[e] * o;
      return i;
    };
  }
  function mr(t) {
    return ArrayBuffer.isView(t) && !(t instanceof DataView);
  }
  function xr(t, n) {
    var e,
      r = n ? n.length : 0,
      i = t ? Math.min(r, t.length) : 0,
      o = new Array(i),
      a = new Array(r);
    for (e = 0; e < i; ++e) o[e] = kr(t[e], n[e]);
    for (; e < r; ++e) a[e] = n[e];
    return function (t) {
      for (e = 0; e < i; ++e) a[e] = o[e](t);
      return a;
    };
  }
  function wr(t, n) {
    var e = new Date();
    return (
      (t = +t),
      (n = +n),
      function (r) {
        return e.setTime(t * (1 - r) + n * r), e;
      }
    );
  }
  function Mr(t, n) {
    return (
      (t = +t),
      (n = +n),
      function (e) {
        return t * (1 - e) + n * e;
      }
    );
  }
  function Ar(t, n) {
    var e,
      r = {},
      i = {};
    for (e in ((null !== t && "object" == typeof t) || (t = {}),
    (null !== n && "object" == typeof n) || (n = {}),
    n))
      e in t ? (r[e] = kr(t[e], n[e])) : (i[e] = n[e]);
    return function (t) {
      for (e in r) i[e] = r[e](t);
      return i;
    };
  }
  var Tr = /[-+]?(?:\d+\.?\d*|\.?\d+)(?:[eE][-+]?\d+)?/g,
    Sr = new RegExp(Tr.source, "g");
  function Er(t, n) {
    var e,
      r,
      i,
      o = (Tr.lastIndex = Sr.lastIndex = 0),
      a = -1,
      u = [],
      c = [];
    for (t += "", n += ""; (e = Tr.exec(t)) && (r = Sr.exec(n)); )
      (i = r.index) > o &&
        ((i = n.slice(o, i)), u[a] ? (u[a] += i) : (u[++a] = i)),
        (e = e[0]) === (r = r[0])
          ? u[a]
            ? (u[a] += r)
            : (u[++a] = r)
          : ((u[++a] = null), c.push({ i: a, x: Mr(e, r) })),
        (o = Sr.lastIndex);
    return (
      o < n.length && ((i = n.slice(o)), u[a] ? (u[a] += i) : (u[++a] = i)),
      u.length < 2
        ? c[0]
          ? (function (t) {
              return function (n) {
                return t(n) + "";
              };
            })(c[0].x)
          : (function (t) {
              return function () {
                return t;
              };
            })(n)
        : ((n = c.length),
          function (t) {
            for (var e, r = 0; r < n; ++r) u[(e = c[r]).i] = e.x(t);
            return u.join("");
          })
    );
  }
  function kr(t, n) {
    var e,
      r = typeof n;
    return null == n || "boolean" === r
      ? sr(n)
      : ("number" === r
          ? Mr
          : "string" === r
          ? (e = _e(n))
            ? ((n = e), gr)
            : Er
          : n instanceof _e
          ? gr
          : n instanceof Date
          ? wr
          : mr(n)
          ? br
          : Array.isArray(n)
          ? xr
          : ("function" != typeof n.valueOf &&
              "function" != typeof n.toString) ||
            isNaN(n)
          ? Ar
          : Mr)(t, n);
  }
  function Nr(t, n) {
    return (
      (t = +t),
      (n = +n),
      function (e) {
        return Math.round(t * (1 - e) + n * e);
      }
    );
  }
  var Cr,
    Pr = 180 / Math.PI,
    zr = {
      translateX: 0,
      translateY: 0,
      rotate: 0,
      skewX: 0,
      scaleX: 1,
      scaleY: 1,
    };
  function Dr(t, n, e, r, i, o) {
    var a, u, c;
    return (
      (a = Math.sqrt(t * t + n * n)) && ((t /= a), (n /= a)),
      (c = t * e + n * r) && ((e -= t * c), (r -= n * c)),
      (u = Math.sqrt(e * e + r * r)) && ((e /= u), (r /= u), (c /= u)),
      t * r < n * e && ((t = -t), (n = -n), (c = -c), (a = -a)),
      {
        translateX: i,
        translateY: o,
        rotate: Math.atan2(n, t) * Pr,
        skewX: Math.atan(c) * Pr,
        scaleX: a,
        scaleY: u,
      }
    );
  }
  function qr(t, n, e, r) {
    function i(t) {
      return t.length ? t.pop() + " " : "";
    }
    return function (o, a) {
      var u = [],
        c = [];
      return (
        (o = t(o)),
        (a = t(a)),
        (function (t, r, i, o, a, u) {
          if (t !== i || r !== o) {
            var c = a.push("translate(", null, n, null, e);
            u.push({ i: c - 4, x: Mr(t, i) }, { i: c - 2, x: Mr(r, o) });
          } else (i || o) && a.push("translate(" + i + n + o + e);
        })(o.translateX, o.translateY, a.translateX, a.translateY, u, c),
        (function (t, n, e, o) {
          t !== n
            ? (t - n > 180 ? (n += 360) : n - t > 180 && (t += 360),
              o.push({ i: e.push(i(e) + "rotate(", null, r) - 2, x: Mr(t, n) }))
            : n && e.push(i(e) + "rotate(" + n + r);
        })(o.rotate, a.rotate, u, c),
        (function (t, n, e, o) {
          t !== n
            ? o.push({ i: e.push(i(e) + "skewX(", null, r) - 2, x: Mr(t, n) })
            : n && e.push(i(e) + "skewX(" + n + r);
        })(o.skewX, a.skewX, u, c),
        (function (t, n, e, r, o, a) {
          if (t !== e || n !== r) {
            var u = o.push(i(o) + "scale(", null, ",", null, ")");
            a.push({ i: u - 4, x: Mr(t, e) }, { i: u - 2, x: Mr(n, r) });
          } else
            (1 === e && 1 === r) || o.push(i(o) + "scale(" + e + "," + r + ")");
        })(o.scaleX, o.scaleY, a.scaleX, a.scaleY, u, c),
        (o = a = null),
        function (t) {
          for (var n, e = -1, r = c.length; ++e < r; ) u[(n = c[e]).i] = n.x(t);
          return u.join("");
        }
      );
    };
  }
  var Rr = qr(
      function (t) {
        const n = new (
          "function" == typeof DOMMatrix ? DOMMatrix : WebKitCSSMatrix
        )(t + "");
        return n.isIdentity ? zr : Dr(n.a, n.b, n.c, n.d, n.e, n.f);
      },
      "px, ",
      "px)",
      "deg)"
    ),
    Fr = qr(
      function (t) {
        return null == t
          ? zr
          : (Cr ||
              (Cr = document.createElementNS(
                "http://www.w3.org/2000/svg",
                "g"
              )),
            Cr.setAttribute("transform", t),
            (t = Cr.transform.baseVal.consolidate())
              ? Dr((t = t.matrix).a, t.b, t.c, t.d, t.e, t.f)
              : zr);
      },
      ", ",
      ")",
      ")"
    );
  function Or(t) {
    return ((t = Math.exp(t)) + 1 / t) / 2;
  }
  var Ir = (function t(n, e, r) {
    function i(t, i) {
      var o,
        a,
        u = t[0],
        c = t[1],
        f = t[2],
        s = i[0],
        l = i[1],
        h = i[2],
        d = s - u,
        p = l - c,
        g = d * d + p * p;
      if (g < 1e-12)
        (a = Math.log(h / f) / n),
          (o = function (t) {
            return [u + t * d, c + t * p, f * Math.exp(n * t * a)];
          });
      else {
        var y = Math.sqrt(g),
          v = (h * h - f * f + r * g) / (2 * f * e * y),
          _ = (h * h - f * f - r * g) / (2 * h * e * y),
          b = Math.log(Math.sqrt(v * v + 1) - v),
          m = Math.log(Math.sqrt(_ * _ + 1) - _);
        (a = (m - b) / n),
          (o = function (t) {
            var r = t * a,
              i = Or(b),
              o =
                (f / (e * y)) *
                (i *
                  (function (t) {
                    return ((t = Math.exp(2 * t)) - 1) / (t + 1);
                  })(n * r + b) -
                  (function (t) {
                    return ((t = Math.exp(t)) - 1 / t) / 2;
                  })(b));
            return [u + o * d, c + o * p, (f * i) / Or(n * r + b)];
          });
      }
      return (o.duration = (1e3 * a * n) / Math.SQRT2), o;
    }
    return (
      (i.rho = function (n) {
        var e = Math.max(0.001, +n),
          r = e * e;
        return t(e, r, r * r);
      }),
      i
    );
  })(Math.SQRT2, 2, 4);
  function Ur(t) {
    return function (n, e) {
      var r = t((n = Ne(n)).h, (e = Ne(e)).h),
        i = pr(n.s, e.s),
        o = pr(n.l, e.l),
        a = pr(n.opacity, e.opacity);
      return function (t) {
        return (
          (n.h = r(t)), (n.s = i(t)), (n.l = o(t)), (n.opacity = a(t)), n + ""
        );
      };
    };
  }
  var Br = Ur(hr),
    Yr = Ur(pr);
  function Lr(t) {
    return function (n, e) {
      var r = t((n = Ve(n)).h, (e = Ve(e)).h),
        i = pr(n.c, e.c),
        o = pr(n.l, e.l),
        a = pr(n.opacity, e.opacity);
      return function (t) {
        return (
          (n.h = r(t)), (n.c = i(t)), (n.l = o(t)), (n.opacity = a(t)), n + ""
        );
      };
    };
  }
  var jr = Lr(hr),
    Hr = Lr(pr);
  function Xr(t) {
    return (function n(e) {
      function r(n, r) {
        var i = t((n = or(n)).h, (r = or(r)).h),
          o = pr(n.s, r.s),
          a = pr(n.l, r.l),
          u = pr(n.opacity, r.opacity);
        return function (t) {
          return (
            (n.h = i(t)),
            (n.s = o(t)),
            (n.l = a(Math.pow(t, e))),
            (n.opacity = u(t)),
            n + ""
          );
        };
      }
      return (e = +e), (r.gamma = n), r;
    })(1);
  }
  var Gr = Xr(hr),
    Vr = Xr(pr);
  function $r(t, n) {
    void 0 === n && ((n = t), (t = kr));
    for (
      var e = 0, r = n.length - 1, i = n[0], o = new Array(r < 0 ? 0 : r);
      e < r;

    )
      o[e] = t(i, (i = n[++e]));
    return function (t) {
      var n = Math.max(0, Math.min(r - 1, Math.floor((t *= r))));
      return o[n](t - n);
    };
  }
  var Wr,
    Zr,
    Kr = 0,
    Qr = 0,
    Jr = 0,
    ti = 0,
    ni = 0,
    ei = 0,
    ri = "object" == typeof performance && performance.now ? performance : Date,
    ii =
      "object" == typeof window && window.requestAnimationFrame
        ? window.requestAnimationFrame.bind(window)
        : function (t) {
            setTimeout(t, 17);
          };
  function oi() {
    return ni || (ii(ai), (ni = ri.now() + ei));
  }
  function ai() {
    ni = 0;
  }
  function ui() {
    this._call = this._time = this._next = null;
  }
  function ci(t, n, e) {
    var r = new ui();
    return r.restart(t, n, e), r;
  }
  function fi() {
    oi(), ++Kr;
    for (var t, n = Wr; n; )
      (t = ni - n._time) >= 0 && n._call.call(void 0, t), (n = n._next);
    --Kr;
  }
  function si() {
    (ni = (ti = ri.now()) + ei), (Kr = Qr = 0);
    try {
      fi();
    } finally {
      (Kr = 0),
        (function () {
          var t,
            n,
            e = Wr,
            r = 1 / 0;
          for (; e; )
            e._call
              ? (r > e._time && (r = e._time), (t = e), (e = e._next))
              : ((n = e._next),
                (e._next = null),
                (e = t ? (t._next = n) : (Wr = n)));
          (Zr = t), hi(r);
        })(),
        (ni = 0);
    }
  }
  function li() {
    var t = ri.now(),
      n = t - ti;
    n > 1e3 && ((ei -= n), (ti = t));
  }
  function hi(t) {
    Kr ||
      (Qr && (Qr = clearTimeout(Qr)),
      t - ni > 24
        ? (t < 1 / 0 && (Qr = setTimeout(si, t - ri.now() - ei)),
          Jr && (Jr = clearInterval(Jr)))
        : (Jr || ((ti = ri.now()), (Jr = setInterval(li, 1e3))),
          (Kr = 1),
          ii(si)));
  }
  function di(t, n, e) {
    var r = new ui();
    return (
      (n = null == n ? 0 : +n),
      r.restart(
        (e) => {
          r.stop(), t(e + n);
        },
        n,
        e
      ),
      r
    );
  }
  ui.prototype = ci.prototype = {
    constructor: ui,
    restart: function (t, n, e) {
      if ("function" != typeof t)
        throw new TypeError("callback is not a function");
      (e = (null == e ? oi() : +e) + (null == n ? 0 : +n)),
        this._next ||
          Zr === this ||
          (Zr ? (Zr._next = this) : (Wr = this), (Zr = this)),
        (this._call = t),
        (this._time = e),
        hi();
    },
    stop: function () {
      this._call && ((this._call = null), (this._time = 1 / 0), hi());
    },
  };
  var pi = yt("start", "end", "cancel", "interrupt"),
    gi = [];
  function yi(t, n, e, r, i, o) {
    var a = t.__transition;
    if (a) {
      if (e in a) return;
    } else t.__transition = {};
    !(function (t, n, e) {
      var r,
        i = t.__transition;
      function o(t) {
        (e.state = 1),
          e.timer.restart(a, e.delay, e.time),
          e.delay <= t && a(t - e.delay);
      }
      function a(o) {
        var f, s, l, h;
        if (1 !== e.state) return c();
        for (f in i)
          if ((h = i[f]).name === e.name) {
            if (3 === h.state) return di(a);
            4 === h.state
              ? ((h.state = 6),
                h.timer.stop(),
                h.on.call("interrupt", t, t.__data__, h.index, h.group),
                delete i[f])
              : +f < n &&
                ((h.state = 6),
                h.timer.stop(),
                h.on.call("cancel", t, t.__data__, h.index, h.group),
                delete i[f]);
          }
        if (
          (di(function () {
            3 === e.state &&
              ((e.state = 4), e.timer.restart(u, e.delay, e.time), u(o));
          }),
          (e.state = 2),
          e.on.call("start", t, t.__data__, e.index, e.group),
          2 === e.state)
        ) {
          for (
            e.state = 3, r = new Array((l = e.tween.length)), f = 0, s = -1;
            f < l;
            ++f
          )
            (h = e.tween[f].value.call(t, t.__data__, e.index, e.group)) &&
              (r[++s] = h);
          r.length = s + 1;
        }
      }
      function u(n) {
        for (
          var i =
              n < e.duration
                ? e.ease.call(null, n / e.duration)
                : (e.timer.restart(c), (e.state = 5), 1),
            o = -1,
            a = r.length;
          ++o < a;

        )
          r[o].call(t, i);
        5 === e.state &&
          (e.on.call("end", t, t.__data__, e.index, e.group), c());
      }
      function c() {
        for (var r in ((e.state = 6), e.timer.stop(), delete i[n], i)) return;
        delete t.__transition;
      }
      (i[n] = e), (e.timer = ci(o, 0, e.time));
    })(t, e, {
      name: n,
      index: r,
      group: i,
      on: pi,
      tween: gi,
      time: o.time,
      delay: o.delay,
      duration: o.duration,
      ease: o.ease,
      timer: null,
      state: 0,
    });
  }
  function vi(t, n) {
    var e = bi(t, n);
    if (e.state > 0) throw new Error("too late; already scheduled");
    return e;
  }
  function _i(t, n) {
    var e = bi(t, n);
    if (e.state > 3) throw new Error("too late; already running");
    return e;
  }
  function bi(t, n) {
    var e = t.__transition;
    if (!e || !(e = e[n])) throw new Error("transition not found");
    return e;
  }
  function mi(t, n) {
    var e,
      r,
      i,
      o = t.__transition,
      a = !0;
    if (o) {
      for (i in ((n = null == n ? null : n + ""), o))
        (e = o[i]).name === n
          ? ((r = e.state > 2 && e.state < 5),
            (e.state = 6),
            e.timer.stop(),
            e.on.call(
              r ? "interrupt" : "cancel",
              t,
              t.__data__,
              e.index,
              e.group
            ),
            delete o[i])
          : (a = !1);
      a && delete t.__transition;
    }
  }
  function xi(t, n) {
    var e, r;
    return function () {
      var i = _i(this, t),
        o = i.tween;
      if (o !== e)
        for (var a = 0, u = (r = e = o).length; a < u; ++a)
          if (r[a].name === n) {
            (r = r.slice()).splice(a, 1);
            break;
          }
      i.tween = r;
    };
  }
  function wi(t, n, e) {
    var r, i;
    if ("function" != typeof e) throw new Error();
    return function () {
      var o = _i(this, t),
        a = o.tween;
      if (a !== r) {
        i = (r = a).slice();
        for (var u = { name: n, value: e }, c = 0, f = i.length; c < f; ++c)
          if (i[c].name === n) {
            i[c] = u;
            break;
          }
        c === f && i.push(u);
      }
      o.tween = i;
    };
  }
  function Mi(t, n, e) {
    var r = t._id;
    return (
      t.each(function () {
        var t = _i(this, r);
        (t.value || (t.value = {}))[n] = e.apply(this, arguments);
      }),
      function (t) {
        return bi(t, r).value[n];
      }
    );
  }
  function Ai(t, n) {
    var e;
    return (
      "number" == typeof n
        ? Mr
        : n instanceof _e
        ? gr
        : (e = _e(n))
        ? ((n = e), gr)
        : Er
    )(t, n);
  }
  function Ti(t) {
    return function () {
      this.removeAttribute(t);
    };
  }
  function Si(t) {
    return function () {
      this.removeAttributeNS(t.space, t.local);
    };
  }
  function Ei(t, n, e) {
    var r,
      i,
      o = e + "";
    return function () {
      var a = this.getAttribute(t);
      return a === o ? null : a === r ? i : (i = n((r = a), e));
    };
  }
  function ki(t, n, e) {
    var r,
      i,
      o = e + "";
    return function () {
      var a = this.getAttributeNS(t.space, t.local);
      return a === o ? null : a === r ? i : (i = n((r = a), e));
    };
  }
  function Ni(t, n, e) {
    var r, i, o;
    return function () {
      var a,
        u,
        c = e(this);
      if (null != c)
        return (a = this.getAttribute(t)) === (u = c + "")
          ? null
          : a === r && u === i
          ? o
          : ((i = u), (o = n((r = a), c)));
      this.removeAttribute(t);
    };
  }
  function Ci(t, n, e) {
    var r, i, o;
    return function () {
      var a,
        u,
        c = e(this);
      if (null != c)
        return (a = this.getAttributeNS(t.space, t.local)) === (u = c + "")
          ? null
          : a === r && u === i
          ? o
          : ((i = u), (o = n((r = a), c)));
      this.removeAttributeNS(t.space, t.local);
    };
  }
  function Pi(t, n) {
    return function (e) {
      this.setAttribute(t, n.call(this, e));
    };
  }
  function zi(t, n) {
    return function (e) {
      this.setAttributeNS(t.space, t.local, n.call(this, e));
    };
  }
  function Di(t, n) {
    var e, r;
    function i() {
      var i = n.apply(this, arguments);
      return i !== r && (e = (r = i) && zi(t, i)), e;
    }
    return (i._value = n), i;
  }
  function qi(t, n) {
    var e, r;
    function i() {
      var i = n.apply(this, arguments);
      return i !== r && (e = (r = i) && Pi(t, i)), e;
    }
    return (i._value = n), i;
  }
  function Ri(t, n) {
    return function () {
      vi(this, t).delay = +n.apply(this, arguments);
    };
  }
  function Fi(t, n) {
    return (
      (n = +n),
      function () {
        vi(this, t).delay = n;
      }
    );
  }
  function Oi(t, n) {
    return function () {
      _i(this, t).duration = +n.apply(this, arguments);
    };
  }
  function Ii(t, n) {
    return (
      (n = +n),
      function () {
        _i(this, t).duration = n;
      }
    );
  }
  function Ui(t, n) {
    if ("function" != typeof n) throw new Error();
    return function () {
      _i(this, t).ease = n;
    };
  }
  function Bi(t, n, e) {
    var r,
      i,
      o = (function (t) {
        return (t + "")
          .trim()
          .split(/^|\s+/)
          .every(function (t) {
            var n = t.indexOf(".");
            return n >= 0 && (t = t.slice(0, n)), !t || "start" === t;
          });
      })(n)
        ? vi
        : _i;
    return function () {
      var a = o(this, t),
        u = a.on;
      u !== r && (i = (r = u).copy()).on(n, e), (a.on = i);
    };
  }
  var Yi = Rn.prototype.constructor;
  function Li(t) {
    return function () {
      this.style.removeProperty(t);
    };
  }
  function ji(t, n, e) {
    return function (r) {
      this.style.setProperty(t, n.call(this, r), e);
    };
  }
  function Hi(t, n, e) {
    var r, i;
    function o() {
      var o = n.apply(this, arguments);
      return o !== i && (r = (i = o) && ji(t, o, e)), r;
    }
    return (o._value = n), o;
  }
  function Xi(t) {
    return function (n) {
      this.textContent = t.call(this, n);
    };
  }
  function Gi(t) {
    var n, e;
    function r() {
      var r = t.apply(this, arguments);
      return r !== e && (n = (e = r) && Xi(r)), n;
    }
    return (r._value = t), r;
  }
  var Vi = 0;
  function $i(t, n, e, r) {
    (this._groups = t), (this._parents = n), (this._name = e), (this._id = r);
  }
  function Wi(t) {
    return Rn().transition(t);
  }
  function Zi() {
    return ++Vi;
  }
  var Ki = Rn.prototype;
  $i.prototype = Wi.prototype = {
    constructor: $i,
    select: function (t) {
      var n = this._name,
        e = this._id;
      "function" != typeof t && (t = kt(t));
      for (
        var r = this._groups, i = r.length, o = new Array(i), a = 0;
        a < i;
        ++a
      )
        for (
          var u, c, f = r[a], s = f.length, l = (o[a] = new Array(s)), h = 0;
          h < s;
          ++h
        )
          (u = f[h]) &&
            (c = t.call(u, u.__data__, h, f)) &&
            ("__data__" in u && (c.__data__ = u.__data__),
            (l[h] = c),
            yi(l[h], n, e, h, l, bi(u, e)));
      return new $i(o, this._parents, n, e);
    },
    selectAll: function (t) {
      var n = this._name,
        e = this._id;
      "function" != typeof t && (t = Pt(t));
      for (
        var r = this._groups, i = r.length, o = [], a = [], u = 0;
        u < i;
        ++u
      )
        for (var c, f = r[u], s = f.length, l = 0; l < s; ++l)
          if ((c = f[l])) {
            for (
              var h,
                d = t.call(c, c.__data__, l, f),
                p = bi(c, e),
                g = 0,
                y = d.length;
              g < y;
              ++g
            )
              (h = d[g]) && yi(h, n, e, g, d, p);
            o.push(d), a.push(c);
          }
      return new $i(o, a, n, e);
    },
    selectChild: Ki.selectChild,
    selectChildren: Ki.selectChildren,
    filter: function (t) {
      "function" != typeof t && (t = zt(t));
      for (
        var n = this._groups, e = n.length, r = new Array(e), i = 0;
        i < e;
        ++i
      )
        for (var o, a = n[i], u = a.length, c = (r[i] = []), f = 0; f < u; ++f)
          (o = a[f]) && t.call(o, o.__data__, f, a) && c.push(o);
      return new $i(r, this._parents, this._name, this._id);
    },
    merge: function (t) {
      if (t._id !== this._id) throw new Error();
      for (
        var n = this._groups,
          e = t._groups,
          r = n.length,
          i = e.length,
          o = Math.min(r, i),
          a = new Array(r),
          u = 0;
        u < o;
        ++u
      )
        for (
          var c,
            f = n[u],
            s = e[u],
            l = f.length,
            h = (a[u] = new Array(l)),
            d = 0;
          d < l;
          ++d
        )
          (c = f[d] || s[d]) && (h[d] = c);
      for (; u < r; ++u) a[u] = n[u];
      return new $i(a, this._parents, this._name, this._id);
    },
    selection: function () {
      return new Yi(this._groups, this._parents);
    },
    transition: function () {
      for (
        var t = this._name,
          n = this._id,
          e = Zi(),
          r = this._groups,
          i = r.length,
          o = 0;
        o < i;
        ++o
      )
        for (var a, u = r[o], c = u.length, f = 0; f < c; ++f)
          if ((a = u[f])) {
            var s = bi(a, n);
            yi(a, t, e, f, u, {
              time: s.time + s.delay + s.duration,
              delay: 0,
              duration: s.duration,
              ease: s.ease,
            });
          }
      return new $i(r, this._parents, t, e);
    },
    call: Ki.call,
    nodes: Ki.nodes,
    node: Ki.node,
    size: Ki.size,
    empty: Ki.empty,
    each: Ki.each,
    on: function (t, n) {
      var e = this._id;
      return arguments.length < 2
        ? bi(this.node(), e).on.on(t)
        : this.each(Bi(e, t, n));
    },
    attr: function (t, n) {
      var e = Mt(t),
        r = "transform" === e ? Fr : Ai;
      return this.attrTween(
        t,
        "function" == typeof n
          ? (e.local ? Ci : Ni)(e, r, Mi(this, "attr." + t, n))
          : null == n
          ? (e.local ? Si : Ti)(e)
          : (e.local ? ki : Ei)(e, r, n)
      );
    },
    attrTween: function (t, n) {
      var e = "attr." + t;
      if (arguments.length < 2) return (e = this.tween(e)) && e._value;
      if (null == n) return this.tween(e, null);
      if ("function" != typeof n) throw new Error();
      var r = Mt(t);
      return this.tween(e, (r.local ? Di : qi)(r, n));
    },
    style: function (t, n, e) {
      var r = "transform" == (t += "") ? Rr : Ai;
      return null == n
        ? this.styleTween(
            t,
            (function (t, n) {
              var e, r, i;
              return function () {
                var o = en(this, t),
                  a = (this.style.removeProperty(t), en(this, t));
                return o === a
                  ? null
                  : o === e && a === r
                  ? i
                  : (i = n((e = o), (r = a)));
              };
            })(t, r)
          ).on("end.style." + t, Li(t))
        : "function" == typeof n
        ? this.styleTween(
            t,
            (function (t, n, e) {
              var r, i, o;
              return function () {
                var a = en(this, t),
                  u = e(this),
                  c = u + "";
                return (
                  null == u &&
                    (this.style.removeProperty(t), (c = u = en(this, t))),
                  a === c
                    ? null
                    : a === r && c === i
                    ? o
                    : ((i = c), (o = n((r = a), u)))
                );
              };
            })(t, r, Mi(this, "style." + t, n))
          ).each(
            (function (t, n) {
              var e,
                r,
                i,
                o,
                a = "style." + n,
                u = "end." + a;
              return function () {
                var c = _i(this, t),
                  f = c.on,
                  s = null == c.value[a] ? o || (o = Li(n)) : void 0;
                (f === e && i === s) || (r = (e = f).copy()).on(u, (i = s)),
                  (c.on = r);
              };
            })(this._id, t)
          )
        : this.styleTween(
            t,
            (function (t, n, e) {
              var r,
                i,
                o = e + "";
              return function () {
                var a = en(this, t);
                return a === o ? null : a === r ? i : (i = n((r = a), e));
              };
            })(t, r, n),
            e
          ).on("end.style." + t, null);
    },
    styleTween: function (t, n, e) {
      var r = "style." + (t += "");
      if (arguments.length < 2) return (r = this.tween(r)) && r._value;
      if (null == n) return this.tween(r, null);
      if ("function" != typeof n) throw new Error();
      return this.tween(r, Hi(t, n, null == e ? "" : e));
    },
    text: function (t) {
      return this.tween(
        "text",
        "function" == typeof t
          ? (function (t) {
              return function () {
                var n = t(this);
                this.textContent = null == n ? "" : n;
              };
            })(Mi(this, "text", t))
          : (function (t) {
              return function () {
                this.textContent = t;
              };
            })(null == t ? "" : t + "")
      );
    },
    textTween: function (t) {
      var n = "text";
      if (arguments.length < 1) return (n = this.tween(n)) && n._value;
      if (null == t) return this.tween(n, null);
      if ("function" != typeof t) throw new Error();
      return this.tween(n, Gi(t));
    },
    remove: function () {
      return this.on(
        "end.remove",
        (function (t) {
          return function () {
            var n = this.parentNode;
            for (var e in this.__transition) if (+e !== t) return;
            n && n.removeChild(this);
          };
        })(this._id)
      );
    },
    tween: function (t, n) {
      var e = this._id;
      if (((t += ""), arguments.length < 2)) {
        for (
          var r, i = bi(this.node(), e).tween, o = 0, a = i.length;
          o < a;
          ++o
        )
          if ((r = i[o]).name === t) return r.value;
        return null;
      }
      return this.each((null == n ? xi : wi)(e, t, n));
    },
    delay: function (t) {
      var n = this._id;
      return arguments.length
        ? this.each(("function" == typeof t ? Ri : Fi)(n, t))
        : bi(this.node(), n).delay;
    },
    duration: function (t) {
      var n = this._id;
      return arguments.length
        ? this.each(("function" == typeof t ? Oi : Ii)(n, t))
        : bi(this.node(), n).duration;
    },
    ease: function (t) {
      var n = this._id;
      return arguments.length ? this.each(Ui(n, t)) : bi(this.node(), n).ease;
    },
    easeVarying: function (t) {
      if ("function" != typeof t) throw new Error();
      return this.each(
        (function (t, n) {
          return function () {
            var e = n.apply(this, arguments);
            if ("function" != typeof e) throw new Error();
            _i(this, t).ease = e;
          };
        })(this._id, t)
      );
    },
    end: function () {
      var t,
        n,
        e = this,
        r = e._id,
        i = e.size();
      return new Promise(function (o, a) {
        var u = { value: a },
          c = {
            value: function () {
              0 == --i && o();
            },
          };
        e.each(function () {
          var e = _i(this, r),
            i = e.on;
          i !== t &&
            ((n = (t = i).copy())._.cancel.push(u),
            n._.interrupt.push(u),
            n._.end.push(c)),
            (e.on = n);
        }),
          0 === i && o();
      });
    },
    [Symbol.iterator]: Ki[Symbol.iterator],
  };
  function Qi(t) {
    return ((t *= 2) <= 1 ? t * t : --t * (2 - t) + 1) / 2;
  }
  function Ji(t) {
    return ((t *= 2) <= 1 ? t * t * t : (t -= 2) * t * t + 2) / 2;
  }
  var to = (function t(n) {
      function e(t) {
        return Math.pow(t, n);
      }
      return (n = +n), (e.exponent = t), e;
    })(3),
    no = (function t(n) {
      function e(t) {
        return 1 - Math.pow(1 - t, n);
      }
      return (n = +n), (e.exponent = t), e;
    })(3),
    eo = (function t(n) {
      function e(t) {
        return ((t *= 2) <= 1 ? Math.pow(t, n) : 2 - Math.pow(2 - t, n)) / 2;
      }
      return (n = +n), (e.exponent = t), e;
    })(3),
    ro = Math.PI,
    io = ro / 2;
  function oo(t) {
    return (1 - Math.cos(ro * t)) / 2;
  }
  function ao(t) {
    return 1.0009775171065494 * (Math.pow(2, -10 * t) - 0.0009765625);
  }
  function uo(t) {
    return ((t *= 2) <= 1 ? ao(1 - t) : 2 - ao(t - 1)) / 2;
  }
  function co(t) {
    return (
      ((t *= 2) <= 1
        ? 1 - Math.sqrt(1 - t * t)
        : Math.sqrt(1 - (t -= 2) * t) + 1) / 2
    );
  }
  var fo = 4 / 11,
    so = 7.5625;
  function lo(t) {
    return (t = +t) < fo
      ? so * t * t
      : t < 0.7272727272727273
      ? so * (t -= 0.5454545454545454) * t + 0.75
      : t < 0.9090909090909091
      ? so * (t -= 0.8181818181818182) * t + 0.9375
      : so * (t -= 0.9545454545454546) * t + 0.984375;
  }
  var ho = 1.70158,
    po = (function t(n) {
      function e(t) {
        return (t = +t) * t * (n * (t - 1) + t);
      }
      return (n = +n), (e.overshoot = t), e;
    })(ho),
    go = (function t(n) {
      function e(t) {
        return --t * t * ((t + 1) * n + t) + 1;
      }
      return (n = +n), (e.overshoot = t), e;
    })(ho),
    yo = (function t(n) {
      function e(t) {
        return (
          ((t *= 2) < 1
            ? t * t * ((n + 1) * t - n)
            : (t -= 2) * t * ((n + 1) * t + n) + 2) / 2
        );
      }
      return (n = +n), (e.overshoot = t), e;
    })(ho),
    vo = 2 * Math.PI,
    _o = (function t(n, e) {
      var r = Math.asin(1 / (n = Math.max(1, n))) * (e /= vo);
      function i(t) {
        return n * ao(-(--t)) * Math.sin((r - t) / e);
      }
      return (
        (i.amplitude = function (n) {
          return t(n, e * vo);
        }),
        (i.period = function (e) {
          return t(n, e);
        }),
        i
      );
    })(1, 0.3),
    bo = (function t(n, e) {
      var r = Math.asin(1 / (n = Math.max(1, n))) * (e /= vo);
      function i(t) {
        return 1 - n * ao((t = +t)) * Math.sin((t + r) / e);
      }
      return (
        (i.amplitude = function (n) {
          return t(n, e * vo);
        }),
        (i.period = function (e) {
          return t(n, e);
        }),
        i
      );
    })(1, 0.3),
    mo = (function t(n, e) {
      var r = Math.asin(1 / (n = Math.max(1, n))) * (e /= vo);
      function i(t) {
        return (
          ((t = 2 * t - 1) < 0
            ? n * ao(-t) * Math.sin((r - t) / e)
            : 2 - n * ao(t) * Math.sin((r + t) / e)) / 2
        );
      }
      return (
        (i.amplitude = function (n) {
          return t(n, e * vo);
        }),
        (i.period = function (e) {
          return t(n, e);
        }),
        i
      );
    })(1, 0.3),
    xo = { time: null, delay: 0, duration: 250, ease: Ji };
  function wo(t, n) {
    for (var e; !(e = t.__transition) || !(e = e[n]); )
      if (!(t = t.parentNode)) throw new Error(`transition ${n} not found`);
    return e;
  }
  (Rn.prototype.interrupt = function (t) {
    return this.each(function () {
      mi(this, t);
    });
  }),
    (Rn.prototype.transition = function (t) {
      var n, e;
      t instanceof $i
        ? ((n = t._id), (t = t._name))
        : ((n = Zi()), ((e = xo).time = oi()), (t = null == t ? null : t + ""));
      for (var r = this._groups, i = r.length, o = 0; o < i; ++o)
        for (var a, u = r[o], c = u.length, f = 0; f < c; ++f)
          (a = u[f]) && yi(a, t, n, f, u, e || wo(a, n));
      return new $i(r, this._parents, t, n);
    });
  var Mo = [null];
  var Ao = (t) => () => t;
  function To(
    t,
    { sourceEvent: n, target: e, selection: r, mode: i, dispatch: o }
  ) {
    Object.defineProperties(this, {
      type: { value: t, enumerable: !0, configurable: !0 },
      sourceEvent: { value: n, enumerable: !0, configurable: !0 },
      target: { value: e, enumerable: !0, configurable: !0 },
      selection: { value: r, enumerable: !0, configurable: !0 },
      mode: { value: i, enumerable: !0, configurable: !0 },
      _: { value: o },
    });
  }
  function So(t) {
    t.stopImmediatePropagation();
  }
  function Eo(t) {
    t.preventDefault(), t.stopImmediatePropagation();
  }
  var ko = { name: "drag" },
    No = { name: "space" },
    Co = { name: "handle" },
    Po = { name: "center" };
  const { abs: zo, max: Do, min: qo } = Math;
  function Ro(t) {
    return [+t[0], +t[1]];
  }
  function Fo(t) {
    return [Ro(t[0]), Ro(t[1])];
  }
  var Oo = {
      name: "x",
      handles: ["w", "e"].map(Xo),
      input: function (t, n) {
        return null == t
          ? null
          : [
              [+t[0], n[0][1]],
              [+t[1], n[1][1]],
            ];
      },
      output: function (t) {
        return t && [t[0][0], t[1][0]];
      },
    },
    Io = {
      name: "y",
      handles: ["n", "s"].map(Xo),
      input: function (t, n) {
        return null == t
          ? null
          : [
              [n[0][0], +t[0]],
              [n[1][0], +t[1]],
            ];
      },
      output: function (t) {
        return t && [t[0][1], t[1][1]];
      },
    },
    Uo = {
      name: "xy",
      handles: ["n", "w", "e", "s", "nw", "ne", "sw", "se"].map(Xo),
      input: function (t) {
        return null == t ? null : Fo(t);
      },
      output: function (t) {
        return t;
      },
    },
    Bo = {
      overlay: "crosshair",
      selection: "move",
      n: "ns-resize",
      e: "ew-resize",
      s: "ns-resize",
      w: "ew-resize",
      nw: "nwse-resize",
      ne: "nesw-resize",
      se: "nwse-resize",
      sw: "nesw-resize",
    },
    Yo = { e: "w", w: "e", nw: "ne", ne: "nw", se: "sw", sw: "se" },
    Lo = { n: "s", s: "n", nw: "sw", ne: "se", se: "ne", sw: "nw" },
    jo = {
      overlay: 1,
      selection: 1,
      n: null,
      e: 1,
      s: null,
      w: -1,
      nw: -1,
      ne: 1,
      se: 1,
      sw: -1,
    },
    Ho = {
      overlay: 1,
      selection: 1,
      n: -1,
      e: null,
      s: 1,
      w: null,
      nw: -1,
      ne: -1,
      se: 1,
      sw: 1,
    };
  function Xo(t) {
    return { type: t };
  }
  function Go(t) {
    return !t.ctrlKey && !t.button;
  }
  function Vo() {
    var t = this.ownerSVGElement || this;
    return t.hasAttribute("viewBox")
      ? [
          [(t = t.viewBox.baseVal).x, t.y],
          [t.x + t.width, t.y + t.height],
        ]
      : [
          [0, 0],
          [t.width.baseVal.value, t.height.baseVal.value],
        ];
  }
  function $o() {
    return navigator.maxTouchPoints || "ontouchstart" in this;
  }
  function Wo(t) {
    for (; !t.__brush; ) if (!(t = t.parentNode)) return;
    return t.__brush;
  }
  function Zo(t) {
    return t[0][0] === t[1][0] || t[0][1] === t[1][1];
  }
  function Ko(t) {
    var n,
      e = Vo,
      r = Go,
      i = $o,
      o = !0,
      a = yt("start", "brush", "end"),
      u = 6;
    function c(n) {
      var e = n
        .property("__brush", g)
        .selectAll(".overlay")
        .data([Xo("overlay")]);
      e
        .enter()
        .append("rect")
        .attr("class", "overlay")
        .attr("pointer-events", "all")
        .attr("cursor", Bo.overlay)
        .merge(e)
        .each(function () {
          var t = Wo(this).extent;
          Fn(this)
            .attr("x", t[0][0])
            .attr("y", t[0][1])
            .attr("width", t[1][0] - t[0][0])
            .attr("height", t[1][1] - t[0][1]);
        }),
        n
          .selectAll(".selection")
          .data([Xo("selection")])
          .enter()
          .append("rect")
          .attr("class", "selection")
          .attr("cursor", Bo.selection)
          .attr("fill", "#777")
          .attr("fill-opacity", 0.3)
          .attr("stroke", "#fff")
          .attr("shape-rendering", "crispEdges");
      var r = n.selectAll(".handle").data(t.handles, function (t) {
        return t.type;
      });
      r.exit().remove(),
        r
          .enter()
          .append("rect")
          .attr("class", function (t) {
            return "handle handle--" + t.type;
          })
          .attr("cursor", function (t) {
            return Bo[t.type];
          }),
        n
          .each(f)
          .attr("fill", "none")
          .attr("pointer-events", "all")
          .on("mousedown.brush", h)
          .filter(i)
          .on("touchstart.brush", h)
          .on("touchmove.brush", d)
          .on("touchend.brush touchcancel.brush", p)
          .style("touch-action", "none")
          .style("-webkit-tap-highlight-color", "rgba(0,0,0,0)");
    }
    function f() {
      var t = Fn(this),
        n = Wo(this).selection;
      n
        ? (t
            .selectAll(".selection")
            .style("display", null)
            .attr("x", n[0][0])
            .attr("y", n[0][1])
            .attr("width", n[1][0] - n[0][0])
            .attr("height", n[1][1] - n[0][1]),
          t
            .selectAll(".handle")
            .style("display", null)
            .attr("x", function (t) {
              return "e" === t.type[t.type.length - 1]
                ? n[1][0] - u / 2
                : n[0][0] - u / 2;
            })
            .attr("y", function (t) {
              return "s" === t.type[0] ? n[1][1] - u / 2 : n[0][1] - u / 2;
            })
            .attr("width", function (t) {
              return "n" === t.type || "s" === t.type
                ? n[1][0] - n[0][0] + u
                : u;
            })
            .attr("height", function (t) {
              return "e" === t.type || "w" === t.type
                ? n[1][1] - n[0][1] + u
                : u;
            }))
        : t
            .selectAll(".selection,.handle")
            .style("display", "none")
            .attr("x", null)
            .attr("y", null)
            .attr("width", null)
            .attr("height", null);
    }
    function s(t, n, e) {
      var r = t.__brush.emitter;
      return !r || (e && r.clean) ? new l(t, n, e) : r;
    }
    function l(t, n, e) {
      (this.that = t),
        (this.args = n),
        (this.state = t.__brush),
        (this.active = 0),
        (this.clean = e);
    }
    function h(e) {
      if ((!n || e.touches) && r.apply(this, arguments)) {
        var i,
          a,
          u,
          c,
          l,
          h,
          d,
          p,
          g,
          y,
          v,
          _ = this,
          b = e.target.__data__.type,
          m =
            "selection" === (o && e.metaKey ? (b = "overlay") : b)
              ? ko
              : o && e.altKey
              ? Po
              : Co,
          x = t === Io ? null : jo[b],
          w = t === Oo ? null : Ho[b],
          M = Wo(_),
          A = M.extent,
          T = M.selection,
          S = A[0][0],
          E = A[0][1],
          k = A[1][0],
          N = A[1][1],
          C = 0,
          P = 0,
          z = x && w && o && e.shiftKey,
          D = Array.from(e.touches || [e], (t) => {
            const n = t.identifier;
            return ((t = Yn(t, _)).point0 = t.slice()), (t.identifier = n), t;
          });
        mi(_);
        var q = s(_, arguments, !0).beforestart();
        if ("overlay" === b) {
          T && (g = !0);
          const n = [D[0], D[1] || D[0]];
          (M.selection = T =
            [
              [
                (i = t === Io ? S : qo(n[0][0], n[1][0])),
                (u = t === Oo ? E : qo(n[0][1], n[1][1])),
              ],
              [
                (l = t === Io ? k : Do(n[0][0], n[1][0])),
                (d = t === Oo ? N : Do(n[0][1], n[1][1])),
              ],
            ]),
            D.length > 1 && U(e);
        } else (i = T[0][0]), (u = T[0][1]), (l = T[1][0]), (d = T[1][1]);
        (a = i), (c = u), (h = l), (p = d);
        var R = Fn(_).attr("pointer-events", "none"),
          F = R.selectAll(".overlay").attr("cursor", Bo[b]);
        if (e.touches) (q.moved = I), (q.ended = B);
        else {
          var O = Fn(e.view)
            .on("mousemove.brush", I, !0)
            .on("mouseup.brush", B, !0);
          o && O.on("keydown.brush", Y, !0).on("keyup.brush", L, !0),
            Gn(e.view);
        }
        f.call(_), q.start(e, m.name);
      }
      function I(t) {
        for (const n of t.changedTouches || [t])
          for (const t of D)
            t.identifier === n.identifier && (t.cur = Yn(n, _));
        if (z && !y && !v && 1 === D.length) {
          const t = D[0];
          zo(t.cur[0] - t[0]) > zo(t.cur[1] - t[1]) ? (v = !0) : (y = !0);
        }
        for (const t of D) t.cur && ((t[0] = t.cur[0]), (t[1] = t.cur[1]));
        (g = !0), Eo(t), U(t);
      }
      function U(t) {
        const n = D[0],
          e = n.point0;
        var r;
        switch (((C = n[0] - e[0]), (P = n[1] - e[1]), m)) {
          case No:
          case ko:
            x && ((C = Do(S - i, qo(k - l, C))), (a = i + C), (h = l + C)),
              w && ((P = Do(E - u, qo(N - d, P))), (c = u + P), (p = d + P));
            break;
          case Co:
            D[1]
              ? (x &&
                  ((a = Do(S, qo(k, D[0][0]))),
                  (h = Do(S, qo(k, D[1][0]))),
                  (x = 1)),
                w &&
                  ((c = Do(E, qo(N, D[0][1]))),
                  (p = Do(E, qo(N, D[1][1]))),
                  (w = 1)))
              : (x < 0
                  ? ((C = Do(S - i, qo(k - i, C))), (a = i + C), (h = l))
                  : x > 0 &&
                    ((C = Do(S - l, qo(k - l, C))), (a = i), (h = l + C)),
                w < 0
                  ? ((P = Do(E - u, qo(N - u, P))), (c = u + P), (p = d))
                  : w > 0 &&
                    ((P = Do(E - d, qo(N - d, P))), (c = u), (p = d + P)));
            break;
          case Po:
            x && ((a = Do(S, qo(k, i - C * x))), (h = Do(S, qo(k, l + C * x)))),
              w &&
                ((c = Do(E, qo(N, u - P * w))), (p = Do(E, qo(N, d + P * w))));
        }
        h < a &&
          ((x *= -1),
          (r = i),
          (i = l),
          (l = r),
          (r = a),
          (a = h),
          (h = r),
          b in Yo && F.attr("cursor", Bo[(b = Yo[b])])),
          p < c &&
            ((w *= -1),
            (r = u),
            (u = d),
            (d = r),
            (r = c),
            (c = p),
            (p = r),
            b in Lo && F.attr("cursor", Bo[(b = Lo[b])])),
          M.selection && (T = M.selection),
          y && ((a = T[0][0]), (h = T[1][0])),
          v && ((c = T[0][1]), (p = T[1][1])),
          (T[0][0] === a && T[0][1] === c && T[1][0] === h && T[1][1] === p) ||
            ((M.selection = [
              [a, c],
              [h, p],
            ]),
            f.call(_),
            q.brush(t, m.name));
      }
      function B(t) {
        if ((So(t), t.touches)) {
          if (t.touches.length) return;
          n && clearTimeout(n),
            (n = setTimeout(function () {
              n = null;
            }, 500));
        } else
          Vn(t.view, g),
            O.on(
              "keydown.brush keyup.brush mousemove.brush mouseup.brush",
              null
            );
        R.attr("pointer-events", "all"),
          F.attr("cursor", Bo.overlay),
          M.selection && (T = M.selection),
          Zo(T) && ((M.selection = null), f.call(_)),
          q.end(t, m.name);
      }
      function Y(t) {
        switch (t.keyCode) {
          case 16:
            z = x && w;
            break;
          case 18:
            m === Co &&
              (x && ((l = h - C * x), (i = a + C * x)),
              w && ((d = p - P * w), (u = c + P * w)),
              (m = Po),
              U(t));
            break;
          case 32:
            (m !== Co && m !== Po) ||
              (x < 0 ? (l = h - C) : x > 0 && (i = a - C),
              w < 0 ? (d = p - P) : w > 0 && (u = c - P),
              (m = No),
              F.attr("cursor", Bo.selection),
              U(t));
            break;
          default:
            return;
        }
        Eo(t);
      }
      function L(t) {
        switch (t.keyCode) {
          case 16:
            z && ((y = v = z = !1), U(t));
            break;
          case 18:
            m === Po &&
              (x < 0 ? (l = h) : x > 0 && (i = a),
              w < 0 ? (d = p) : w > 0 && (u = c),
              (m = Co),
              U(t));
            break;
          case 32:
            m === No &&
              (t.altKey
                ? (x && ((l = h - C * x), (i = a + C * x)),
                  w && ((d = p - P * w), (u = c + P * w)),
                  (m = Po))
                : (x < 0 ? (l = h) : x > 0 && (i = a),
                  w < 0 ? (d = p) : w > 0 && (u = c),
                  (m = Co)),
              F.attr("cursor", Bo[b]),
              U(t));
            break;
          default:
            return;
        }
        Eo(t);
      }
    }
    function d(t) {
      s(this, arguments).moved(t);
    }
    function p(t) {
      s(this, arguments).ended(t);
    }
    function g() {
      var n = this.__brush || { selection: null };
      return (n.extent = Fo(e.apply(this, arguments))), (n.dim = t), n;
    }
    return (
      (c.move = function (n, e, r) {
        n.tween
          ? n
              .on("start.brush", function (t) {
                s(this, arguments).beforestart().start(t);
              })
              .on("interrupt.brush end.brush", function (t) {
                s(this, arguments).end(t);
              })
              .tween("brush", function () {
                var n = this,
                  r = n.__brush,
                  i = s(n, arguments),
                  o = r.selection,
                  a = t.input(
                    "function" == typeof e ? e.apply(this, arguments) : e,
                    r.extent
                  ),
                  u = kr(o, a);
                function c(t) {
                  (r.selection = 1 === t && null === a ? null : u(t)),
                    f.call(n),
                    i.brush();
                }
                return null !== o && null !== a ? c : c(1);
              })
          : n.each(function () {
              var n = this,
                i = arguments,
                o = n.__brush,
                a = t.input(
                  "function" == typeof e ? e.apply(n, i) : e,
                  o.extent
                ),
                u = s(n, i).beforestart();
              mi(n),
                (o.selection = null === a ? null : a),
                f.call(n),
                u.start(r).brush(r).end(r);
            });
      }),
      (c.clear = function (t, n) {
        c.move(t, null, n);
      }),
      (l.prototype = {
        beforestart: function () {
          return (
            1 == ++this.active &&
              ((this.state.emitter = this), (this.starting = !0)),
            this
          );
        },
        start: function (t, n) {
          return (
            this.starting
              ? ((this.starting = !1), this.emit("start", t, n))
              : this.emit("brush", t),
            this
          );
        },
        brush: function (t, n) {
          return this.emit("brush", t, n), this;
        },
        end: function (t, n) {
          return (
            0 == --this.active &&
              (delete this.state.emitter, this.emit("end", t, n)),
            this
          );
        },
        emit: function (n, e, r) {
          var i = Fn(this.that).datum();
          a.call(
            n,
            this.that,
            new To(n, {
              sourceEvent: e,
              target: c,
              selection: t.output(this.state.selection),
              mode: r,
              dispatch: a,
            }),
            i
          );
        },
      }),
      (c.extent = function (t) {
        return arguments.length
          ? ((e = "function" == typeof t ? t : Ao(Fo(t))), c)
          : e;
      }),
      (c.filter = function (t) {
        return arguments.length
          ? ((r = "function" == typeof t ? t : Ao(!!t)), c)
          : r;
      }),
      (c.touchable = function (t) {
        return arguments.length
          ? ((i = "function" == typeof t ? t : Ao(!!t)), c)
          : i;
      }),
      (c.handleSize = function (t) {
        return arguments.length ? ((u = +t), c) : u;
      }),
      (c.keyModifiers = function (t) {
        return arguments.length ? ((o = !!t), c) : o;
      }),
      (c.on = function () {
        var t = a.on.apply(a, arguments);
        return t === a ? c : t;
      }),
      c
    );
  }
  var Qo = Math.abs,
    Jo = Math.cos,
    ta = Math.sin,
    na = Math.PI,
    ea = na / 2,
    ra = 2 * na,
    ia = Math.max,
    oa = 1e-12;
  function aa(t, n) {
    return Array.from({ length: n - t }, (n, e) => t + e);
  }
  function ua(t) {
    return function (n, e) {
      return t(
        n.source.value + n.target.value,
        e.source.value + e.target.value
      );
    };
  }
  function ca(t, n) {
    var e = 0,
      r = null,
      i = null,
      o = null;
    function a(a) {
      var u,
        c = a.length,
        f = new Array(c),
        s = aa(0, c),
        l = new Array(c * c),
        h = new Array(c),
        d = 0;
      a = Float64Array.from(
        { length: c * c },
        n ? (t, n) => a[n % c][(n / c) | 0] : (t, n) => a[(n / c) | 0][n % c]
      );
      for (let n = 0; n < c; ++n) {
        let e = 0;
        for (let r = 0; r < c; ++r) e += a[n * c + r] + t * a[r * c + n];
        d += f[n] = e;
      }
      u = (d = ia(0, ra - e * c) / d) ? e : ra / c;
      {
        let n = 0;
        r && s.sort((t, n) => r(f[t], f[n]));
        for (const e of s) {
          const r = n;
          if (t) {
            const t = aa(1 + ~c, c).filter((t) =>
              t < 0 ? a[~t * c + e] : a[e * c + t]
            );
            i &&
              t.sort((t, n) =>
                i(
                  t < 0 ? -a[~t * c + e] : a[e * c + t],
                  n < 0 ? -a[~n * c + e] : a[e * c + n]
                )
              );
            for (const r of t)
              if (r < 0) {
                (
                  l[~r * c + e] ||
                  (l[~r * c + e] = { source: null, target: null })
                ).target = {
                  index: e,
                  startAngle: n,
                  endAngle: (n += a[~r * c + e] * d),
                  value: a[~r * c + e],
                };
              } else {
                (
                  l[e * c + r] ||
                  (l[e * c + r] = { source: null, target: null })
                ).source = {
                  index: e,
                  startAngle: n,
                  endAngle: (n += a[e * c + r] * d),
                  value: a[e * c + r],
                };
              }
            h[e] = { index: e, startAngle: r, endAngle: n, value: f[e] };
          } else {
            const t = aa(0, c).filter((t) => a[e * c + t] || a[t * c + e]);
            i && t.sort((t, n) => i(a[e * c + t], a[e * c + n]));
            for (const r of t) {
              let t;
              if (
                (e < r
                  ? ((t =
                      l[e * c + r] ||
                      (l[e * c + r] = { source: null, target: null })),
                    (t.source = {
                      index: e,
                      startAngle: n,
                      endAngle: (n += a[e * c + r] * d),
                      value: a[e * c + r],
                    }))
                  : ((t =
                      l[r * c + e] ||
                      (l[r * c + e] = { source: null, target: null })),
                    (t.target = {
                      index: e,
                      startAngle: n,
                      endAngle: (n += a[e * c + r] * d),
                      value: a[e * c + r],
                    }),
                    e === r && (t.source = t.target)),
                t.source && t.target && t.source.value < t.target.value)
              ) {
                const n = t.source;
                (t.source = t.target), (t.target = n);
              }
            }
            h[e] = { index: e, startAngle: r, endAngle: n, value: f[e] };
          }
          n += u;
        }
      }
      return ((l = Object.values(l)).groups = h), o ? l.sort(o) : l;
    }
    return (
      (a.padAngle = function (t) {
        return arguments.length ? ((e = ia(0, t)), a) : e;
      }),
      (a.sortGroups = function (t) {
        return arguments.length ? ((r = t), a) : r;
      }),
      (a.sortSubgroups = function (t) {
        return arguments.length ? ((i = t), a) : i;
      }),
      (a.sortChords = function (t) {
        return arguments.length
          ? (null == t ? (o = null) : ((o = ua(t))._ = t), a)
          : o && o._;
      }),
      a
    );
  }
  const fa = Math.PI,
    sa = 2 * fa,
    la = 1e-6,
    ha = sa - la;
  function da() {
    (this._x0 = this._y0 = this._x1 = this._y1 = null), (this._ = "");
  }
  function pa() {
    return new da();
  }
  da.prototype = pa.prototype = {
    constructor: da,
    moveTo: function (t, n) {
      this._ +=
        "M" + (this._x0 = this._x1 = +t) + "," + (this._y0 = this._y1 = +n);
    },
    closePath: function () {
      null !== this._x1 &&
        ((this._x1 = this._x0), (this._y1 = this._y0), (this._ += "Z"));
    },
    lineTo: function (t, n) {
      this._ += "L" + (this._x1 = +t) + "," + (this._y1 = +n);
    },
    quadraticCurveTo: function (t, n, e, r) {
      this._ +=
        "Q" + +t + "," + +n + "," + (this._x1 = +e) + "," + (this._y1 = +r);
    },
    bezierCurveTo: function (t, n, e, r, i, o) {
      this._ +=
        "C" +
        +t +
        "," +
        +n +
        "," +
        +e +
        "," +
        +r +
        "," +
        (this._x1 = +i) +
        "," +
        (this._y1 = +o);
    },
    arcTo: function (t, n, e, r, i) {
      (t = +t), (n = +n), (e = +e), (r = +r), (i = +i);
      var o = this._x1,
        a = this._y1,
        u = e - t,
        c = r - n,
        f = o - t,
        s = a - n,
        l = f * f + s * s;
      if (i < 0) throw new Error("negative radius: " + i);
      if (null === this._x1)
        this._ += "M" + (this._x1 = t) + "," + (this._y1 = n);
      else if (l > la)
        if (Math.abs(s * u - c * f) > la && i) {
          var h = e - o,
            d = r - a,
            p = u * u + c * c,
            g = h * h + d * d,
            y = Math.sqrt(p),
            v = Math.sqrt(l),
            _ = i * Math.tan((fa - Math.acos((p + l - g) / (2 * y * v))) / 2),
            b = _ / v,
            m = _ / y;
          Math.abs(b - 1) > la &&
            (this._ += "L" + (t + b * f) + "," + (n + b * s)),
            (this._ +=
              "A" +
              i +
              "," +
              i +
              ",0,0," +
              +(s * h > f * d) +
              "," +
              (this._x1 = t + m * u) +
              "," +
              (this._y1 = n + m * c));
        } else this._ += "L" + (this._x1 = t) + "," + (this._y1 = n);
      else;
    },
    arc: function (t, n, e, r, i, o) {
      (t = +t), (n = +n), (o = !!o);
      var a = (e = +e) * Math.cos(r),
        u = e * Math.sin(r),
        c = t + a,
        f = n + u,
        s = 1 ^ o,
        l = o ? r - i : i - r;
      if (e < 0) throw new Error("negative radius: " + e);
      null === this._x1
        ? (this._ += "M" + c + "," + f)
        : (Math.abs(this._x1 - c) > la || Math.abs(this._y1 - f) > la) &&
          (this._ += "L" + c + "," + f),
        e &&
          (l < 0 && (l = (l % sa) + sa),
          l > ha
            ? (this._ +=
                "A" +
                e +
                "," +
                e +
                ",0,1," +
                s +
                "," +
                (t - a) +
                "," +
                (n - u) +
                "A" +
                e +
                "," +
                e +
                ",0,1," +
                s +
                "," +
                (this._x1 = c) +
                "," +
                (this._y1 = f))
            : l > la &&
              (this._ +=
                "A" +
                e +
                "," +
                e +
                ",0," +
                +(l >= fa) +
                "," +
                s +
                "," +
                (this._x1 = t + e * Math.cos(i)) +
                "," +
                (this._y1 = n + e * Math.sin(i))));
    },
    rect: function (t, n, e, r) {
      this._ +=
        "M" +
        (this._x0 = this._x1 = +t) +
        "," +
        (this._y0 = this._y1 = +n) +
        "h" +
        +e +
        "v" +
        +r +
        "h" +
        -e +
        "Z";
    },
    toString: function () {
      return this._;
    },
  };
  var ga = Array.prototype.slice;
  function ya(t) {
    return function () {
      return t;
    };
  }
  function va(t) {
    return t.source;
  }
  function _a(t) {
    return t.target;
  }
  function ba(t) {
    return t.radius;
  }
  function ma(t) {
    return t.startAngle;
  }
  function xa(t) {
    return t.endAngle;
  }
  function wa() {
    return 0;
  }
  function Ma() {
    return 10;
  }
  function Aa(t) {
    var n = va,
      e = _a,
      r = ba,
      i = ba,
      o = ma,
      a = xa,
      u = wa,
      c = null;
    function f() {
      var f,
        s = n.apply(this, arguments),
        l = e.apply(this, arguments),
        h = u.apply(this, arguments) / 2,
        d = ga.call(arguments),
        p = +r.apply(this, ((d[0] = s), d)),
        g = o.apply(this, d) - ea,
        y = a.apply(this, d) - ea,
        v = +i.apply(this, ((d[0] = l), d)),
        _ = o.apply(this, d) - ea,
        b = a.apply(this, d) - ea;
      if (
        (c || (c = f = pa()),
        h > oa &&
          (Qo(y - g) > 2 * h + oa
            ? y > g
              ? ((g += h), (y -= h))
              : ((g -= h), (y += h))
            : (g = y = (g + y) / 2),
          Qo(b - _) > 2 * h + oa
            ? b > _
              ? ((_ += h), (b -= h))
              : ((_ -= h), (b += h))
            : (_ = b = (_ + b) / 2)),
        c.moveTo(p * Jo(g), p * ta(g)),
        c.arc(0, 0, p, g, y),
        g !== _ || y !== b)
      )
        if (t) {
          var m = +t.apply(this, arguments),
            x = v - m,
            w = (_ + b) / 2;
          c.quadraticCurveTo(0, 0, x * Jo(_), x * ta(_)),
            c.lineTo(v * Jo(w), v * ta(w)),
            c.lineTo(x * Jo(b), x * ta(b));
        } else
          c.quadraticCurveTo(0, 0, v * Jo(_), v * ta(_)), c.arc(0, 0, v, _, b);
      if ((c.quadraticCurveTo(0, 0, p * Jo(g), p * ta(g)), c.closePath(), f))
        return (c = null), f + "" || null;
    }
    return (
      t &&
        (f.headRadius = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : ya(+n)), f)
            : t;
        }),
      (f.radius = function (t) {
        return arguments.length
          ? ((r = i = "function" == typeof t ? t : ya(+t)), f)
          : r;
      }),
      (f.sourceRadius = function (t) {
        return arguments.length
          ? ((r = "function" == typeof t ? t : ya(+t)), f)
          : r;
      }),
      (f.targetRadius = function (t) {
        return arguments.length
          ? ((i = "function" == typeof t ? t : ya(+t)), f)
          : i;
      }),
      (f.startAngle = function (t) {
        return arguments.length
          ? ((o = "function" == typeof t ? t : ya(+t)), f)
          : o;
      }),
      (f.endAngle = function (t) {
        return arguments.length
          ? ((a = "function" == typeof t ? t : ya(+t)), f)
          : a;
      }),
      (f.padAngle = function (t) {
        return arguments.length
          ? ((u = "function" == typeof t ? t : ya(+t)), f)
          : u;
      }),
      (f.source = function (t) {
        return arguments.length ? ((n = t), f) : n;
      }),
      (f.target = function (t) {
        return arguments.length ? ((e = t), f) : e;
      }),
      (f.context = function (t) {
        return arguments.length ? ((c = null == t ? null : t), f) : c;
      }),
      f
    );
  }
  var Ta = Array.prototype.slice;
  function Sa(t, n) {
    return t - n;
  }
  var Ea = (t) => () => t;
  function ka(t, n) {
    for (var e, r = -1, i = n.length; ++r < i; )
      if ((e = Na(t, n[r]))) return e;
    return 0;
  }
  function Na(t, n) {
    for (
      var e = n[0], r = n[1], i = -1, o = 0, a = t.length, u = a - 1;
      o < a;
      u = o++
    ) {
      var c = t[o],
        f = c[0],
        s = c[1],
        l = t[u],
        h = l[0],
        d = l[1];
      if (Ca(c, l, n)) return 0;
      s > r != d > r && e < ((h - f) * (r - s)) / (d - s) + f && (i = -i);
    }
    return i;
  }
  function Ca(t, n, e) {
    var r, i, o, a;
    return (
      (function (t, n, e) {
        return (n[0] - t[0]) * (e[1] - t[1]) == (e[0] - t[0]) * (n[1] - t[1]);
      })(t, n, e) &&
      ((i = t[(r = +(t[0] === n[0]))]),
      (o = e[r]),
      (a = n[r]),
      (i <= o && o <= a) || (a <= o && o <= i))
    );
  }
  function Pa() {}
  var za = [
    [],
    [
      [
        [1, 1.5],
        [0.5, 1],
      ],
    ],
    [
      [
        [1.5, 1],
        [1, 1.5],
      ],
    ],
    [
      [
        [1.5, 1],
        [0.5, 1],
      ],
    ],
    [
      [
        [1, 0.5],
        [1.5, 1],
      ],
    ],
    [
      [
        [1, 1.5],
        [0.5, 1],
      ],
      [
        [1, 0.5],
        [1.5, 1],
      ],
    ],
    [
      [
        [1, 0.5],
        [1, 1.5],
      ],
    ],
    [
      [
        [1, 0.5],
        [0.5, 1],
      ],
    ],
    [
      [
        [0.5, 1],
        [1, 0.5],
      ],
    ],
    [
      [
        [1, 1.5],
        [1, 0.5],
      ],
    ],
    [
      [
        [0.5, 1],
        [1, 0.5],
      ],
      [
        [1.5, 1],
        [1, 1.5],
      ],
    ],
    [
      [
        [1.5, 1],
        [1, 0.5],
      ],
    ],
    [
      [
        [0.5, 1],
        [1.5, 1],
      ],
    ],
    [
      [
        [1, 1.5],
        [1.5, 1],
      ],
    ],
    [
      [
        [0.5, 1],
        [1, 1.5],
      ],
    ],
    [],
  ];
  function Da() {
    var t = 1,
      n = 1,
      e = Y,
      r = u;
    function i(t) {
      var n = e(t);
      if (Array.isArray(n)) n = n.slice().sort(Sa);
      else {
        const e = p(t),
          r = U(e[0], e[1], n);
        n = O(Math.floor(e[0] / r) * r, Math.floor(e[1] / r - 1) * r, n);
      }
      return n.map((n) => o(t, n));
    }
    function o(e, i) {
      var o = [],
        u = [];
      return (
        (function (e, r, i) {
          var o,
            u,
            c,
            f,
            s,
            l,
            h = new Array(),
            d = new Array();
          (o = u = -1), (f = e[0] >= r), za[f << 1].forEach(p);
          for (; ++o < t - 1; )
            (c = f), (f = e[o + 1] >= r), za[c | (f << 1)].forEach(p);
          za[f << 0].forEach(p);
          for (; ++u < n - 1; ) {
            for (
              o = -1,
                f = e[u * t + t] >= r,
                s = e[u * t] >= r,
                za[(f << 1) | (s << 2)].forEach(p);
              ++o < t - 1;

            )
              (c = f),
                (f = e[u * t + t + o + 1] >= r),
                (l = s),
                (s = e[u * t + o + 1] >= r),
                za[c | (f << 1) | (s << 2) | (l << 3)].forEach(p);
            za[f | (s << 3)].forEach(p);
          }
          (o = -1), (s = e[u * t] >= r), za[s << 2].forEach(p);
          for (; ++o < t - 1; )
            (l = s),
              (s = e[u * t + o + 1] >= r),
              za[(s << 2) | (l << 3)].forEach(p);
          function p(t) {
            var n,
              e,
              r = [t[0][0] + o, t[0][1] + u],
              c = [t[1][0] + o, t[1][1] + u],
              f = a(r),
              s = a(c);
            (n = d[f])
              ? (e = h[s])
                ? (delete d[n.end],
                  delete h[e.start],
                  n === e
                    ? (n.ring.push(c), i(n.ring))
                    : (h[n.start] = d[e.end] =
                        {
                          start: n.start,
                          end: e.end,
                          ring: n.ring.concat(e.ring),
                        }))
                : (delete d[n.end], n.ring.push(c), (d[(n.end = s)] = n))
              : (n = h[s])
              ? (e = d[f])
                ? (delete h[n.start],
                  delete d[e.end],
                  n === e
                    ? (n.ring.push(c), i(n.ring))
                    : (h[e.start] = d[n.end] =
                        {
                          start: e.start,
                          end: n.end,
                          ring: e.ring.concat(n.ring),
                        }))
                : (delete h[n.start], n.ring.unshift(r), (h[(n.start = f)] = n))
              : (h[f] = d[s] = { start: f, end: s, ring: [r, c] });
          }
          za[s << 3].forEach(p);
        })(e, i, function (t) {
          r(t, e, i),
            (function (t) {
              for (
                var n = 0,
                  e = t.length,
                  r = t[e - 1][1] * t[0][0] - t[e - 1][0] * t[0][1];
                ++n < e;

              )
                r += t[n - 1][1] * t[n][0] - t[n - 1][0] * t[n][1];
              return r;
            })(t) > 0
              ? o.push([t])
              : u.push(t);
        }),
        u.forEach(function (t) {
          for (var n, e = 0, r = o.length; e < r; ++e)
            if (-1 !== ka((n = o[e])[0], t)) return void n.push(t);
        }),
        { type: "MultiPolygon", value: i, coordinates: o }
      );
    }
    function a(n) {
      return 2 * n[0] + n[1] * (t + 1) * 4;
    }
    function u(e, r, i) {
      e.forEach(function (e) {
        var o,
          a = e[0],
          u = e[1],
          c = 0 | a,
          f = 0 | u,
          s = r[f * t + c];
        a > 0 &&
          a < t &&
          c === a &&
          ((o = r[f * t + c - 1]), (e[0] = a + (i - o) / (s - o) - 0.5)),
          u > 0 &&
            u < n &&
            f === u &&
            ((o = r[(f - 1) * t + c]), (e[1] = u + (i - o) / (s - o) - 0.5));
      });
    }
    return (
      (i.contour = o),
      (i.size = function (e) {
        if (!arguments.length) return [t, n];
        var r = Math.floor(e[0]),
          o = Math.floor(e[1]);
        if (!(r >= 0 && o >= 0)) throw new Error("invalid size");
        return (t = r), (n = o), i;
      }),
      (i.thresholds = function (t) {
        return arguments.length
          ? ((e =
              "function" == typeof t
                ? t
                : Array.isArray(t)
                ? Ea(Ta.call(t))
                : Ea(t)),
            i)
          : e;
      }),
      (i.smooth = function (t) {
        return arguments.length ? ((r = t ? u : Pa), i) : r === u;
      }),
      i
    );
  }
  function qa(t, n, e) {
    for (var r = t.width, i = t.height, o = 1 + (e << 1), a = 0; a < i; ++a)
      for (var u = 0, c = 0; u < r + e; ++u)
        u < r && (c += t.data[u + a * r]),
          u >= e &&
            (u >= o && (c -= t.data[u - o + a * r]),
            (n.data[u - e + a * r] = c / Math.min(u + 1, r - 1 + o - u, o)));
  }
  function Ra(t, n, e) {
    for (var r = t.width, i = t.height, o = 1 + (e << 1), a = 0; a < r; ++a)
      for (var u = 0, c = 0; u < i + e; ++u)
        u < i && (c += t.data[a + u * r]),
          u >= e &&
            (u >= o && (c -= t.data[a + (u - o) * r]),
            (n.data[a + (u - e) * r] = c / Math.min(u + 1, i - 1 + o - u, o)));
  }
  function Fa(t) {
    return t[0];
  }
  function Oa(t) {
    return t[1];
  }
  function Ia() {
    return 1;
  }
  const Ua = 134217729;
  function Ba(t, n, e, r, i) {
    let o,
      a,
      u,
      c,
      f = n[0],
      s = r[0],
      l = 0,
      h = 0;
    s > f == s > -f ? ((o = f), (f = n[++l])) : ((o = s), (s = r[++h]));
    let d = 0;
    if (l < t && h < e)
      for (
        s > f == s > -f
          ? ((a = f + o), (u = o - (a - f)), (f = n[++l]))
          : ((a = s + o), (u = o - (a - s)), (s = r[++h])),
          o = a,
          0 !== u && (i[d++] = u);
        l < t && h < e;

      )
        s > f == s > -f
          ? ((a = o + f),
            (c = a - o),
            (u = o - (a - c) + (f - c)),
            (f = n[++l]))
          : ((a = o + s),
            (c = a - o),
            (u = o - (a - c) + (s - c)),
            (s = r[++h])),
          (o = a),
          0 !== u && (i[d++] = u);
    for (; l < t; )
      (a = o + f),
        (c = a - o),
        (u = o - (a - c) + (f - c)),
        (f = n[++l]),
        (o = a),
        0 !== u && (i[d++] = u);
    for (; h < e; )
      (a = o + s),
        (c = a - o),
        (u = o - (a - c) + (s - c)),
        (s = r[++h]),
        (o = a),
        0 !== u && (i[d++] = u);
    return (0 === o && 0 !== d) || (i[d++] = o), d;
  }
  function Ya(t) {
    return new Float64Array(t);
  }
  const La = Ya(4),
    ja = Ya(8),
    Ha = Ya(12),
    Xa = Ya(16),
    Ga = Ya(4);
  function Va(t, n, e, r, i, o) {
    const a = (n - o) * (e - i),
      u = (t - i) * (r - o),
      c = a - u;
    if (0 === a || 0 === u || a > 0 != u > 0) return c;
    const f = Math.abs(a + u);
    return Math.abs(c) >= 33306690738754716e-32 * f
      ? c
      : -(function (t, n, e, r, i, o, a) {
          let u, c, f, s, l, h, d, p, g, y, v, _, b, m, x, w, M, A;
          const T = t - i,
            S = e - i,
            E = n - o,
            k = r - o;
          (m = T * k),
            (h = Ua * T),
            (d = h - (h - T)),
            (p = T - d),
            (h = Ua * k),
            (g = h - (h - k)),
            (y = k - g),
            (x = p * y - (m - d * g - p * g - d * y)),
            (w = E * S),
            (h = Ua * E),
            (d = h - (h - E)),
            (p = E - d),
            (h = Ua * S),
            (g = h - (h - S)),
            (y = S - g),
            (M = p * y - (w - d * g - p * g - d * y)),
            (v = x - M),
            (l = x - v),
            (La[0] = x - (v + l) + (l - M)),
            (_ = m + v),
            (l = _ - m),
            (b = m - (_ - l) + (v - l)),
            (v = b - w),
            (l = b - v),
            (La[1] = b - (v + l) + (l - w)),
            (A = _ + v),
            (l = A - _),
            (La[2] = _ - (A - l) + (v - l)),
            (La[3] = A);
          let N = (function (t, n) {
              let e = n[0];
              for (let r = 1; r < t; r++) e += n[r];
              return e;
            })(4, La),
            C = 22204460492503146e-32 * a;
          if (N >= C || -N >= C) return N;
          if (
            ((l = t - T),
            (u = t - (T + l) + (l - i)),
            (l = e - S),
            (f = e - (S + l) + (l - i)),
            (l = n - E),
            (c = n - (E + l) + (l - o)),
            (l = r - k),
            (s = r - (k + l) + (l - o)),
            0 === u && 0 === c && 0 === f && 0 === s)
          )
            return N;
          if (
            ((C =
              11093356479670487e-47 * a + 33306690738754706e-32 * Math.abs(N)),
            (N += T * s + k * u - (E * f + S * c)),
            N >= C || -N >= C)
          )
            return N;
          (m = u * k),
            (h = Ua * u),
            (d = h - (h - u)),
            (p = u - d),
            (h = Ua * k),
            (g = h - (h - k)),
            (y = k - g),
            (x = p * y - (m - d * g - p * g - d * y)),
            (w = c * S),
            (h = Ua * c),
            (d = h - (h - c)),
            (p = c - d),
            (h = Ua * S),
            (g = h - (h - S)),
            (y = S - g),
            (M = p * y - (w - d * g - p * g - d * y)),
            (v = x - M),
            (l = x - v),
            (Ga[0] = x - (v + l) + (l - M)),
            (_ = m + v),
            (l = _ - m),
            (b = m - (_ - l) + (v - l)),
            (v = b - w),
            (l = b - v),
            (Ga[1] = b - (v + l) + (l - w)),
            (A = _ + v),
            (l = A - _),
            (Ga[2] = _ - (A - l) + (v - l)),
            (Ga[3] = A);
          const P = Ba(4, La, 4, Ga, ja);
          (m = T * s),
            (h = Ua * T),
            (d = h - (h - T)),
            (p = T - d),
            (h = Ua * s),
            (g = h - (h - s)),
            (y = s - g),
            (x = p * y - (m - d * g - p * g - d * y)),
            (w = E * f),
            (h = Ua * E),
            (d = h - (h - E)),
            (p = E - d),
            (h = Ua * f),
            (g = h - (h - f)),
            (y = f - g),
            (M = p * y - (w - d * g - p * g - d * y)),
            (v = x - M),
            (l = x - v),
            (Ga[0] = x - (v + l) + (l - M)),
            (_ = m + v),
            (l = _ - m),
            (b = m - (_ - l) + (v - l)),
            (v = b - w),
            (l = b - v),
            (Ga[1] = b - (v + l) + (l - w)),
            (A = _ + v),
            (l = A - _),
            (Ga[2] = _ - (A - l) + (v - l)),
            (Ga[3] = A);
          const z = Ba(P, ja, 4, Ga, Ha);
          (m = u * s),
            (h = Ua * u),
            (d = h - (h - u)),
            (p = u - d),
            (h = Ua * s),
            (g = h - (h - s)),
            (y = s - g),
            (x = p * y - (m - d * g - p * g - d * y)),
            (w = c * f),
            (h = Ua * c),
            (d = h - (h - c)),
            (p = c - d),
            (h = Ua * f),
            (g = h - (h - f)),
            (y = f - g),
            (M = p * y - (w - d * g - p * g - d * y)),
            (v = x - M),
            (l = x - v),
            (Ga[0] = x - (v + l) + (l - M)),
            (_ = m + v),
            (l = _ - m),
            (b = m - (_ - l) + (v - l)),
            (v = b - w),
            (l = b - v),
            (Ga[1] = b - (v + l) + (l - w)),
            (A = _ + v),
            (l = A - _),
            (Ga[2] = _ - (A - l) + (v - l)),
            (Ga[3] = A);
          const D = Ba(z, Ha, 4, Ga, Xa);
          return Xa[D - 1];
        })(t, n, e, r, i, o, f);
  }
  const $a = Math.pow(2, -52),
    Wa = new Uint32Array(512);
  class Za {
    static from(t, n = eu, e = ru) {
      const r = t.length,
        i = new Float64Array(2 * r);
      for (let o = 0; o < r; o++) {
        const r = t[o];
        (i[2 * o] = n(r)), (i[2 * o + 1] = e(r));
      }
      return new Za(i);
    }
    constructor(t) {
      const n = t.length >> 1;
      if (n > 0 && "number" != typeof t[0])
        throw new Error("Expected coords to contain numbers.");
      this.coords = t;
      const e = Math.max(2 * n - 5, 0);
      (this._triangles = new Uint32Array(3 * e)),
        (this._halfedges = new Int32Array(3 * e)),
        (this._hashSize = Math.ceil(Math.sqrt(n))),
        (this._hullPrev = new Uint32Array(n)),
        (this._hullNext = new Uint32Array(n)),
        (this._hullTri = new Uint32Array(n)),
        (this._hullHash = new Int32Array(this._hashSize).fill(-1)),
        (this._ids = new Uint32Array(n)),
        (this._dists = new Float64Array(n)),
        this.update();
    }
    update() {
      const {
          coords: t,
          _hullPrev: n,
          _hullNext: e,
          _hullTri: r,
          _hullHash: i,
        } = this,
        o = t.length >> 1;
      let a = 1 / 0,
        u = 1 / 0,
        c = -1 / 0,
        f = -1 / 0;
      for (let n = 0; n < o; n++) {
        const e = t[2 * n],
          r = t[2 * n + 1];
        e < a && (a = e),
          r < u && (u = r),
          e > c && (c = e),
          r > f && (f = r),
          (this._ids[n] = n);
      }
      const s = (a + c) / 2,
        l = (u + f) / 2;
      let h,
        d,
        p,
        g = 1 / 0;
      for (let n = 0; n < o; n++) {
        const e = Ka(s, l, t[2 * n], t[2 * n + 1]);
        e < g && ((h = n), (g = e));
      }
      const y = t[2 * h],
        v = t[2 * h + 1];
      g = 1 / 0;
      for (let n = 0; n < o; n++) {
        if (n === h) continue;
        const e = Ka(y, v, t[2 * n], t[2 * n + 1]);
        e < g && e > 0 && ((d = n), (g = e));
      }
      let _ = t[2 * d],
        b = t[2 * d + 1],
        m = 1 / 0;
      for (let n = 0; n < o; n++) {
        if (n === h || n === d) continue;
        const e = Ja(y, v, _, b, t[2 * n], t[2 * n + 1]);
        e < m && ((p = n), (m = e));
      }
      let x = t[2 * p],
        w = t[2 * p + 1];
      if (m === 1 / 0) {
        for (let n = 0; n < o; n++)
          this._dists[n] = t[2 * n] - t[0] || t[2 * n + 1] - t[1];
        tu(this._ids, this._dists, 0, o - 1);
        const n = new Uint32Array(o);
        let e = 0;
        for (let t = 0, r = -1 / 0; t < o; t++) {
          const i = this._ids[t];
          this._dists[i] > r && ((n[e++] = i), (r = this._dists[i]));
        }
        return (
          (this.hull = n.subarray(0, e)),
          (this.triangles = new Uint32Array(0)),
          void (this.halfedges = new Uint32Array(0))
        );
      }
      if (Va(y, v, _, b, x, w) < 0) {
        const t = d,
          n = _,
          e = b;
        (d = p), (_ = x), (b = w), (p = t), (x = n), (w = e);
      }
      const M = (function (t, n, e, r, i, o) {
        const a = e - t,
          u = r - n,
          c = i - t,
          f = o - n,
          s = a * a + u * u,
          l = c * c + f * f,
          h = 0.5 / (a * f - u * c);
        return { x: t + (f * s - u * l) * h, y: n + (a * l - c * s) * h };
      })(y, v, _, b, x, w);
      (this._cx = M.x), (this._cy = M.y);
      for (let n = 0; n < o; n++)
        this._dists[n] = Ka(t[2 * n], t[2 * n + 1], M.x, M.y);
      tu(this._ids, this._dists, 0, o - 1), (this._hullStart = h);
      let A = 3;
      (e[h] = n[p] = d),
        (e[d] = n[h] = p),
        (e[p] = n[d] = h),
        (r[h] = 0),
        (r[d] = 1),
        (r[p] = 2),
        i.fill(-1),
        (i[this._hashKey(y, v)] = h),
        (i[this._hashKey(_, b)] = d),
        (i[this._hashKey(x, w)] = p),
        (this.trianglesLen = 0),
        this._addTriangle(h, d, p, -1, -1, -1);
      for (let o, a, u = 0; u < this._ids.length; u++) {
        const c = this._ids[u],
          f = t[2 * c],
          s = t[2 * c + 1];
        if (u > 0 && Math.abs(f - o) <= $a && Math.abs(s - a) <= $a) continue;
        if (((o = f), (a = s), c === h || c === d || c === p)) continue;
        let l = 0;
        for (
          let t = 0, n = this._hashKey(f, s);
          t < this._hashSize &&
          ((l = i[(n + t) % this._hashSize]), -1 === l || l === e[l]);
          t++
        );
        l = n[l];
        let g,
          y = l;
        for (
          ;
          (g = e[y]),
            Va(f, s, t[2 * y], t[2 * y + 1], t[2 * g], t[2 * g + 1]) >= 0;

        )
          if (((y = g), y === l)) {
            y = -1;
            break;
          }
        if (-1 === y) continue;
        let v = this._addTriangle(y, c, e[y], -1, -1, r[y]);
        (r[c] = this._legalize(v + 2)), (r[y] = v), A++;
        let _ = e[y];
        for (
          ;
          (g = e[_]),
            Va(f, s, t[2 * _], t[2 * _ + 1], t[2 * g], t[2 * g + 1]) < 0;

        )
          (v = this._addTriangle(_, c, g, r[c], -1, r[_])),
            (r[c] = this._legalize(v + 2)),
            (e[_] = _),
            A--,
            (_ = g);
        if (y === l)
          for (
            ;
            (g = n[y]),
              Va(f, s, t[2 * g], t[2 * g + 1], t[2 * y], t[2 * y + 1]) < 0;

          )
            (v = this._addTriangle(g, c, y, -1, r[y], r[g])),
              this._legalize(v + 2),
              (r[g] = v),
              (e[y] = y),
              A--,
              (y = g);
        (this._hullStart = n[c] = y),
          (e[y] = n[_] = c),
          (e[c] = _),
          (i[this._hashKey(f, s)] = c),
          (i[this._hashKey(t[2 * y], t[2 * y + 1])] = y);
      }
      this.hull = new Uint32Array(A);
      for (let t = 0, n = this._hullStart; t < A; t++)
        (this.hull[t] = n), (n = e[n]);
      (this.triangles = this._triangles.subarray(0, this.trianglesLen)),
        (this.halfedges = this._halfedges.subarray(0, this.trianglesLen));
    }
    _hashKey(t, n) {
      return (
        Math.floor(
          (function (t, n) {
            const e = t / (Math.abs(t) + Math.abs(n));
            return (n > 0 ? 3 - e : 1 + e) / 4;
          })(t - this._cx, n - this._cy) * this._hashSize
        ) % this._hashSize
      );
    }
    _legalize(t) {
      const { _triangles: n, _halfedges: e, coords: r } = this;
      let i = 0,
        o = 0;
      for (;;) {
        const a = e[t],
          u = t - (t % 3);
        if (((o = u + ((t + 2) % 3)), -1 === a)) {
          if (0 === i) break;
          t = Wa[--i];
          continue;
        }
        const c = a - (a % 3),
          f = u + ((t + 1) % 3),
          s = c + ((a + 2) % 3),
          l = n[o],
          h = n[t],
          d = n[f],
          p = n[s];
        if (
          Qa(
            r[2 * l],
            r[2 * l + 1],
            r[2 * h],
            r[2 * h + 1],
            r[2 * d],
            r[2 * d + 1],
            r[2 * p],
            r[2 * p + 1]
          )
        ) {
          (n[t] = p), (n[a] = l);
          const r = e[s];
          if (-1 === r) {
            let n = this._hullStart;
            do {
              if (this._hullTri[n] === s) {
                this._hullTri[n] = t;
                break;
              }
              n = this._hullPrev[n];
            } while (n !== this._hullStart);
          }
          this._link(t, r), this._link(a, e[o]), this._link(o, s);
          const u = c + ((a + 1) % 3);
          i < Wa.length && (Wa[i++] = u);
        } else {
          if (0 === i) break;
          t = Wa[--i];
        }
      }
      return o;
    }
    _link(t, n) {
      (this._halfedges[t] = n), -1 !== n && (this._halfedges[n] = t);
    }
    _addTriangle(t, n, e, r, i, o) {
      const a = this.trianglesLen;
      return (
        (this._triangles[a] = t),
        (this._triangles[a + 1] = n),
        (this._triangles[a + 2] = e),
        this._link(a, r),
        this._link(a + 1, i),
        this._link(a + 2, o),
        (this.trianglesLen += 3),
        a
      );
    }
  }
  function Ka(t, n, e, r) {
    const i = t - e,
      o = n - r;
    return i * i + o * o;
  }
  function Qa(t, n, e, r, i, o, a, u) {
    const c = t - a,
      f = n - u,
      s = e - a,
      l = r - u,
      h = i - a,
      d = o - u,
      p = s * s + l * l,
      g = h * h + d * d;
    return (
      c * (l * g - p * d) -
        f * (s * g - p * h) +
        (c * c + f * f) * (s * d - l * h) <
      0
    );
  }
  function Ja(t, n, e, r, i, o) {
    const a = e - t,
      u = r - n,
      c = i - t,
      f = o - n,
      s = a * a + u * u,
      l = c * c + f * f,
      h = 0.5 / (a * f - u * c),
      d = (f * s - u * l) * h,
      p = (a * l - c * s) * h;
    return d * d + p * p;
  }
  function tu(t, n, e, r) {
    if (r - e <= 20)
      for (let i = e + 1; i <= r; i++) {
        const r = t[i],
          o = n[r];
        let a = i - 1;
        for (; a >= e && n[t[a]] > o; ) t[a + 1] = t[a--];
        t[a + 1] = r;
      }
    else {
      let i = e + 1,
        o = r;
      nu(t, (e + r) >> 1, i),
        n[t[e]] > n[t[r]] && nu(t, e, r),
        n[t[i]] > n[t[r]] && nu(t, i, r),
        n[t[e]] > n[t[i]] && nu(t, e, i);
      const a = t[i],
        u = n[a];
      for (;;) {
        do {
          i++;
        } while (n[t[i]] < u);
        do {
          o--;
        } while (n[t[o]] > u);
        if (o < i) break;
        nu(t, i, o);
      }
      (t[e + 1] = t[o]),
        (t[o] = a),
        r - i + 1 >= o - e
          ? (tu(t, n, i, r), tu(t, n, e, o - 1))
          : (tu(t, n, e, o - 1), tu(t, n, i, r));
    }
  }
  function nu(t, n, e) {
    const r = t[n];
    (t[n] = t[e]), (t[e] = r);
  }
  function eu(t) {
    return t[0];
  }
  function ru(t) {
    return t[1];
  }
  const iu = 1e-6;
  class ou {
    constructor() {
      (this._x0 = this._y0 = this._x1 = this._y1 = null), (this._ = "");
    }
    moveTo(t, n) {
      this._ += `M${(this._x0 = this._x1 = +t)},${(this._y0 = this._y1 = +n)}`;
    }
    closePath() {
      null !== this._x1 &&
        ((this._x1 = this._x0), (this._y1 = this._y0), (this._ += "Z"));
    }
    lineTo(t, n) {
      this._ += `L${(this._x1 = +t)},${(this._y1 = +n)}`;
    }
    arc(t, n, e) {
      const r = (t = +t) + (e = +e),
        i = (n = +n);
      if (e < 0) throw new Error("negative radius");
      null === this._x1
        ? (this._ += `M${r},${i}`)
        : (Math.abs(this._x1 - r) > iu || Math.abs(this._y1 - i) > iu) &&
          (this._ += "L" + r + "," + i),
        e &&
          (this._ += `A${e},${e},0,1,1,${
            t - e
          },${n}A${e},${e},0,1,1,${(this._x1 = r)},${(this._y1 = i)}`);
    }
    rect(t, n, e, r) {
      this._ += `M${(this._x0 = this._x1 = +t)},${(this._y0 = this._y1 =
        +n)}h${+e}v${+r}h${-e}Z`;
    }
    value() {
      return this._ || null;
    }
  }
  class au {
    constructor() {
      this._ = [];
    }
    moveTo(t, n) {
      this._.push([t, n]);
    }
    closePath() {
      this._.push(this._[0].slice());
    }
    lineTo(t, n) {
      this._.push([t, n]);
    }
    value() {
      return this._.length ? this._ : null;
    }
  }
  class uu {
    constructor(t, [n, e, r, i] = [0, 0, 960, 500]) {
      if (!((r = +r) >= (n = +n) && (i = +i) >= (e = +e)))
        throw new Error("invalid bounds");
      (this.delaunay = t),
        (this._circumcenters = new Float64Array(2 * t.points.length)),
        (this.vectors = new Float64Array(2 * t.points.length)),
        (this.xmax = r),
        (this.xmin = n),
        (this.ymax = i),
        (this.ymin = e),
        this._init();
    }
    update() {
      return this.delaunay.update(), this._init(), this;
    }
    _init() {
      const {
          delaunay: { points: t, hull: n, triangles: e },
          vectors: r,
        } = this,
        i = (this.circumcenters = this._circumcenters.subarray(
          0,
          (e.length / 3) * 2
        ));
      for (let n, r, o = 0, a = 0, u = e.length; o < u; o += 3, a += 2) {
        const u = 2 * e[o],
          c = 2 * e[o + 1],
          f = 2 * e[o + 2],
          s = t[u],
          l = t[u + 1],
          h = t[c],
          d = t[c + 1],
          p = t[f],
          g = t[f + 1],
          y = h - s,
          v = d - l,
          _ = p - s,
          b = g - l,
          m = 2 * (y * b - v * _);
        if (Math.abs(m) < 1e-9) {
          let i = 1e9;
          const o = 2 * e[0];
          (i *= Math.sign((t[o] - s) * b - (t[o + 1] - l) * _)),
            (n = (s + p) / 2 - i * b),
            (r = (l + g) / 2 + i * _);
        } else {
          const t = 1 / m,
            e = y * y + v * v,
            i = _ * _ + b * b;
          (n = s + (b * e - v * i) * t), (r = l + (y * i - _ * e) * t);
        }
        (i[a] = n), (i[a + 1] = r);
      }
      let o,
        a,
        u,
        c = n[n.length - 1],
        f = 4 * c,
        s = t[2 * c],
        l = t[2 * c + 1];
      r.fill(0);
      for (let e = 0; e < n.length; ++e)
        (c = n[e]),
          (o = f),
          (a = s),
          (u = l),
          (f = 4 * c),
          (s = t[2 * c]),
          (l = t[2 * c + 1]),
          (r[o + 2] = r[f] = u - l),
          (r[o + 3] = r[f + 1] = s - a);
    }
    render(t) {
      const n = null == t ? (t = new ou()) : void 0,
        {
          delaunay: { halfedges: e, inedges: r, hull: i },
          circumcenters: o,
          vectors: a,
        } = this;
      if (i.length <= 1) return null;
      for (let n = 0, r = e.length; n < r; ++n) {
        const r = e[n];
        if (r < n) continue;
        const i = 2 * Math.floor(n / 3),
          a = 2 * Math.floor(r / 3),
          u = o[i],
          c = o[i + 1],
          f = o[a],
          s = o[a + 1];
        this._renderSegment(u, c, f, s, t);
      }
      let u,
        c = i[i.length - 1];
      for (let n = 0; n < i.length; ++n) {
        (u = c), (c = i[n]);
        const e = 2 * Math.floor(r[c] / 3),
          f = o[e],
          s = o[e + 1],
          l = 4 * u,
          h = this._project(f, s, a[l + 2], a[l + 3]);
        h && this._renderSegment(f, s, h[0], h[1], t);
      }
      return n && n.value();
    }
    renderBounds(t) {
      const n = null == t ? (t = new ou()) : void 0;
      return (
        t.rect(
          this.xmin,
          this.ymin,
          this.xmax - this.xmin,
          this.ymax - this.ymin
        ),
        n && n.value()
      );
    }
    renderCell(t, n) {
      const e = null == n ? (n = new ou()) : void 0,
        r = this._clip(t);
      if (null === r || !r.length) return;
      n.moveTo(r[0], r[1]);
      let i = r.length;
      for (; r[0] === r[i - 2] && r[1] === r[i - 1] && i > 1; ) i -= 2;
      for (let t = 2; t < i; t += 2)
        (r[t] === r[t - 2] && r[t + 1] === r[t - 1]) ||
          n.lineTo(r[t], r[t + 1]);
      return n.closePath(), e && e.value();
    }
    *cellPolygons() {
      const {
        delaunay: { points: t },
      } = this;
      for (let n = 0, e = t.length / 2; n < e; ++n) {
        const t = this.cellPolygon(n);
        t && ((t.index = n), yield t);
      }
    }
    cellPolygon(t) {
      const n = new au();
      return this.renderCell(t, n), n.value();
    }
    _renderSegment(t, n, e, r, i) {
      let o;
      const a = this._regioncode(t, n),
        u = this._regioncode(e, r);
      0 === a && 0 === u
        ? (i.moveTo(t, n), i.lineTo(e, r))
        : (o = this._clipSegment(t, n, e, r, a, u)) &&
          (i.moveTo(o[0], o[1]), i.lineTo(o[2], o[3]));
    }
    contains(t, n, e) {
      return (
        (n = +n) == n && (e = +e) == e && this.delaunay._step(t, n, e) === t
      );
    }
    *neighbors(t) {
      const n = this._clip(t);
      if (n)
        for (const e of this.delaunay.neighbors(t)) {
          const t = this._clip(e);
          if (t)
            t: for (let r = 0, i = n.length; r < i; r += 2)
              for (let o = 0, a = t.length; o < a; o += 2)
                if (
                  n[r] == t[o] &&
                  n[r + 1] == t[o + 1] &&
                  n[(r + 2) % i] == t[(o + a - 2) % a] &&
                  n[(r + 3) % i] == t[(o + a - 1) % a]
                ) {
                  yield e;
                  break t;
                }
        }
    }
    _cell(t) {
      const {
          circumcenters: n,
          delaunay: { inedges: e, halfedges: r, triangles: i },
        } = this,
        o = e[t];
      if (-1 === o) return null;
      const a = [];
      let u = o;
      do {
        const e = Math.floor(u / 3);
        if (
          (a.push(n[2 * e], n[2 * e + 1]),
          (u = u % 3 == 2 ? u - 2 : u + 1),
          i[u] !== t)
        )
          break;
        u = r[u];
      } while (u !== o && -1 !== u);
      return a;
    }
    _clip(t) {
      if (0 === t && 1 === this.delaunay.hull.length)
        return [
          this.xmax,
          this.ymin,
          this.xmax,
          this.ymax,
          this.xmin,
          this.ymax,
          this.xmin,
          this.ymin,
        ];
      const n = this._cell(t);
      if (null === n) return null;
      const { vectors: e } = this,
        r = 4 * t;
      return e[r] || e[r + 1]
        ? this._clipInfinite(t, n, e[r], e[r + 1], e[r + 2], e[r + 3])
        : this._clipFinite(t, n);
    }
    _clipFinite(t, n) {
      const e = n.length;
      let r,
        i,
        o,
        a,
        u = null,
        c = n[e - 2],
        f = n[e - 1],
        s = this._regioncode(c, f),
        l = 0;
      for (let h = 0; h < e; h += 2)
        if (
          ((r = c),
          (i = f),
          (c = n[h]),
          (f = n[h + 1]),
          (o = s),
          (s = this._regioncode(c, f)),
          0 === o && 0 === s)
        )
          (a = l), (l = 0), u ? u.push(c, f) : (u = [c, f]);
        else {
          let n, e, h, d, p;
          if (0 === o) {
            if (null === (n = this._clipSegment(r, i, c, f, o, s))) continue;
            [e, h, d, p] = n;
          } else {
            if (null === (n = this._clipSegment(c, f, r, i, s, o))) continue;
            ([d, p, e, h] = n),
              (a = l),
              (l = this._edgecode(e, h)),
              a && l && this._edge(t, a, l, u, u.length),
              u ? u.push(e, h) : (u = [e, h]);
          }
          (a = l),
            (l = this._edgecode(d, p)),
            a && l && this._edge(t, a, l, u, u.length),
            u ? u.push(d, p) : (u = [d, p]);
        }
      if (u)
        (a = l),
          (l = this._edgecode(u[0], u[1])),
          a && l && this._edge(t, a, l, u, u.length);
      else if (
        this.contains(
          t,
          (this.xmin + this.xmax) / 2,
          (this.ymin + this.ymax) / 2
        )
      )
        return [
          this.xmax,
          this.ymin,
          this.xmax,
          this.ymax,
          this.xmin,
          this.ymax,
          this.xmin,
          this.ymin,
        ];
      return u;
    }
    _clipSegment(t, n, e, r, i, o) {
      for (;;) {
        if (0 === i && 0 === o) return [t, n, e, r];
        if (i & o) return null;
        let a,
          u,
          c = i || o;
        8 & c
          ? ((a = t + ((e - t) * (this.ymax - n)) / (r - n)), (u = this.ymax))
          : 4 & c
          ? ((a = t + ((e - t) * (this.ymin - n)) / (r - n)), (u = this.ymin))
          : 2 & c
          ? ((u = n + ((r - n) * (this.xmax - t)) / (e - t)), (a = this.xmax))
          : ((u = n + ((r - n) * (this.xmin - t)) / (e - t)), (a = this.xmin)),
          i
            ? ((t = a), (n = u), (i = this._regioncode(t, n)))
            : ((e = a), (r = u), (o = this._regioncode(e, r)));
      }
    }
    _clipInfinite(t, n, e, r, i, o) {
      let a,
        u = Array.from(n);
      if (
        ((a = this._project(u[0], u[1], e, r)) && u.unshift(a[0], a[1]),
        (a = this._project(u[u.length - 2], u[u.length - 1], i, o)) &&
          u.push(a[0], a[1]),
        (u = this._clipFinite(t, u)))
      )
        for (
          let n, e = 0, r = u.length, i = this._edgecode(u[r - 2], u[r - 1]);
          e < r;
          e += 2
        )
          (n = i),
            (i = this._edgecode(u[e], u[e + 1])),
            n && i && ((e = this._edge(t, n, i, u, e)), (r = u.length));
      else
        this.contains(
          t,
          (this.xmin + this.xmax) / 2,
          (this.ymin + this.ymax) / 2
        ) &&
          (u = [
            this.xmin,
            this.ymin,
            this.xmax,
            this.ymin,
            this.xmax,
            this.ymax,
            this.xmin,
            this.ymax,
          ]);
      return u;
    }
    _edge(t, n, e, r, i) {
      for (; n !== e; ) {
        let e, o;
        switch (n) {
          case 5:
            n = 4;
            continue;
          case 4:
            (n = 6), (e = this.xmax), (o = this.ymin);
            break;
          case 6:
            n = 2;
            continue;
          case 2:
            (n = 10), (e = this.xmax), (o = this.ymax);
            break;
          case 10:
            n = 8;
            continue;
          case 8:
            (n = 9), (e = this.xmin), (o = this.ymax);
            break;
          case 9:
            n = 1;
            continue;
          case 1:
            (n = 5), (e = this.xmin), (o = this.ymin);
        }
        (r[i] === e && r[i + 1] === o) ||
          !this.contains(t, e, o) ||
          (r.splice(i, 0, e, o), (i += 2));
      }
      if (r.length > 4)
        for (let t = 0; t < r.length; t += 2) {
          const n = (t + 2) % r.length,
            e = (t + 4) % r.length;
          ((r[t] === r[n] && r[n] === r[e]) ||
            (r[t + 1] === r[n + 1] && r[n + 1] === r[e + 1])) &&
            (r.splice(n, 2), (t -= 2));
        }
      return i;
    }
    _project(t, n, e, r) {
      let i,
        o,
        a,
        u = 1 / 0;
      if (r < 0) {
        if (n <= this.ymin) return null;
        (i = (this.ymin - n) / r) < u &&
          ((a = this.ymin), (o = t + (u = i) * e));
      } else if (r > 0) {
        if (n >= this.ymax) return null;
        (i = (this.ymax - n) / r) < u &&
          ((a = this.ymax), (o = t + (u = i) * e));
      }
      if (e > 0) {
        if (t >= this.xmax) return null;
        (i = (this.xmax - t) / e) < u &&
          ((o = this.xmax), (a = n + (u = i) * r));
      } else if (e < 0) {
        if (t <= this.xmin) return null;
        (i = (this.xmin - t) / e) < u &&
          ((o = this.xmin), (a = n + (u = i) * r));
      }
      return [o, a];
    }
    _edgecode(t, n) {
      return (
        (t === this.xmin ? 1 : t === this.xmax ? 2 : 0) |
        (n === this.ymin ? 4 : n === this.ymax ? 8 : 0)
      );
    }
    _regioncode(t, n) {
      return (
        (t < this.xmin ? 1 : t > this.xmax ? 2 : 0) |
        (n < this.ymin ? 4 : n > this.ymax ? 8 : 0)
      );
    }
  }
  const cu = 2 * Math.PI,
    fu = Math.pow;
  function su(t) {
    return t[0];
  }
  function lu(t) {
    return t[1];
  }
  function hu(t, n, e) {
    return [t + Math.sin(t + n) * e, n + Math.cos(t - n) * e];
  }
  class du {
    static from(t, n = su, e = lu, r) {
      return new du(
        "length" in t
          ? (function (t, n, e, r) {
              const i = t.length,
                o = new Float64Array(2 * i);
              for (let a = 0; a < i; ++a) {
                const i = t[a];
                (o[2 * a] = n.call(r, i, a, t)),
                  (o[2 * a + 1] = e.call(r, i, a, t));
              }
              return o;
            })(t, n, e, r)
          : Float64Array.from(
              (function* (t, n, e, r) {
                let i = 0;
                for (const o of t)
                  yield n.call(r, o, i, t), yield e.call(r, o, i, t), ++i;
              })(t, n, e, r)
            )
      );
    }
    constructor(t) {
      (this._delaunator = new Za(t)),
        (this.inedges = new Int32Array(t.length / 2)),
        (this._hullIndex = new Int32Array(t.length / 2)),
        (this.points = this._delaunator.coords),
        this._init();
    }
    update() {
      return this._delaunator.update(), this._init(), this;
    }
    _init() {
      const t = this._delaunator,
        n = this.points;
      if (
        t.hull &&
        t.hull.length > 2 &&
        (function (t) {
          const { triangles: n, coords: e } = t;
          for (let t = 0; t < n.length; t += 3) {
            const r = 2 * n[t],
              i = 2 * n[t + 1],
              o = 2 * n[t + 2];
            if (
              (e[o] - e[r]) * (e[i + 1] - e[r + 1]) -
                (e[i] - e[r]) * (e[o + 1] - e[r + 1]) >
              1e-10
            )
              return !1;
          }
          return !0;
        })(t)
      ) {
        this.collinear = Int32Array.from(
          { length: n.length / 2 },
          (t, n) => n
        ).sort((t, e) => n[2 * t] - n[2 * e] || n[2 * t + 1] - n[2 * e + 1]);
        const t = this.collinear[0],
          e = this.collinear[this.collinear.length - 1],
          r = [n[2 * t], n[2 * t + 1], n[2 * e], n[2 * e + 1]],
          i = 1e-8 * Math.hypot(r[3] - r[1], r[2] - r[0]);
        for (let t = 0, e = n.length / 2; t < e; ++t) {
          const e = hu(n[2 * t], n[2 * t + 1], i);
          (n[2 * t] = e[0]), (n[2 * t + 1] = e[1]);
        }
        this._delaunator = new Za(n);
      } else delete this.collinear;
      const e = (this.halfedges = this._delaunator.halfedges),
        r = (this.hull = this._delaunator.hull),
        i = (this.triangles = this._delaunator.triangles),
        o = this.inedges.fill(-1),
        a = this._hullIndex.fill(-1);
      for (let t = 0, n = e.length; t < n; ++t) {
        const n = i[t % 3 == 2 ? t - 2 : t + 1];
        (-1 !== e[t] && -1 !== o[n]) || (o[n] = t);
      }
      for (let t = 0, n = r.length; t < n; ++t) a[r[t]] = t;
      r.length <= 2 &&
        r.length > 0 &&
        ((this.triangles = new Int32Array(3).fill(-1)),
        (this.halfedges = new Int32Array(3).fill(-1)),
        (this.triangles[0] = r[0]),
        (o[r[0]] = 1),
        2 === r.length &&
          ((o[r[1]] = 0),
          (this.triangles[1] = r[1]),
          (this.triangles[2] = r[1])));
    }
    voronoi(t) {
      return new uu(this, t);
    }
    *neighbors(t) {
      const {
        inedges: n,
        hull: e,
        _hullIndex: r,
        halfedges: i,
        triangles: o,
        collinear: a,
      } = this;
      if (a) {
        const n = a.indexOf(t);
        return (
          n > 0 && (yield a[n - 1]), void (n < a.length - 1 && (yield a[n + 1]))
        );
      }
      const u = n[t];
      if (-1 === u) return;
      let c = u,
        f = -1;
      do {
        if ((yield (f = o[c]), (c = c % 3 == 2 ? c - 2 : c + 1), o[c] !== t))
          return;
        if (((c = i[c]), -1 === c)) {
          const n = e[(r[t] + 1) % e.length];
          return void (n !== f && (yield n));
        }
      } while (c !== u);
    }
    find(t, n, e = 0) {
      if ((t = +t) != t || (n = +n) != n) return -1;
      const r = e;
      let i;
      for (; (i = this._step(e, t, n)) >= 0 && i !== e && i !== r; ) e = i;
      return i;
    }
    _step(t, n, e) {
      const {
        inedges: r,
        hull: i,
        _hullIndex: o,
        halfedges: a,
        triangles: u,
        points: c,
      } = this;
      if (-1 === r[t] || !c.length) return (t + 1) % (c.length >> 1);
      let f = t,
        s = fu(n - c[2 * t], 2) + fu(e - c[2 * t + 1], 2);
      const l = r[t];
      let h = l;
      do {
        let r = u[h];
        const l = fu(n - c[2 * r], 2) + fu(e - c[2 * r + 1], 2);
        if (
          (l < s && ((s = l), (f = r)),
          (h = h % 3 == 2 ? h - 2 : h + 1),
          u[h] !== t)
        )
          break;
        if (((h = a[h]), -1 === h)) {
          if (
            ((h = i[(o[t] + 1) % i.length]),
            h !== r && fu(n - c[2 * h], 2) + fu(e - c[2 * h + 1], 2) < s)
          )
            return h;
          break;
        }
      } while (h !== l);
      return f;
    }
    render(t) {
      const n = null == t ? (t = new ou()) : void 0,
        { points: e, halfedges: r, triangles: i } = this;
      for (let n = 0, o = r.length; n < o; ++n) {
        const o = r[n];
        if (o < n) continue;
        const a = 2 * i[n],
          u = 2 * i[o];
        t.moveTo(e[a], e[a + 1]), t.lineTo(e[u], e[u + 1]);
      }
      return this.renderHull(t), n && n.value();
    }
    renderPoints(t, n) {
      void 0 !== n ||
        (t && "function" == typeof t.moveTo) ||
        ((n = t), (t = null)),
        (n = null == n ? 2 : +n);
      const e = null == t ? (t = new ou()) : void 0,
        { points: r } = this;
      for (let e = 0, i = r.length; e < i; e += 2) {
        const i = r[e],
          o = r[e + 1];
        t.moveTo(i + n, o), t.arc(i, o, n, 0, cu);
      }
      return e && e.value();
    }
    renderHull(t) {
      const n = null == t ? (t = new ou()) : void 0,
        { hull: e, points: r } = this,
        i = 2 * e[0],
        o = e.length;
      t.moveTo(r[i], r[i + 1]);
      for (let n = 1; n < o; ++n) {
        const i = 2 * e[n];
        t.lineTo(r[i], r[i + 1]);
      }
      return t.closePath(), n && n.value();
    }
    hullPolygon() {
      const t = new au();
      return this.renderHull(t), t.value();
    }
    renderTriangle(t, n) {
      const e = null == n ? (n = new ou()) : void 0,
        { points: r, triangles: i } = this,
        o = 2 * i[(t *= 3)],
        a = 2 * i[t + 1],
        u = 2 * i[t + 2];
      return (
        n.moveTo(r[o], r[o + 1]),
        n.lineTo(r[a], r[a + 1]),
        n.lineTo(r[u], r[u + 1]),
        n.closePath(),
        e && e.value()
      );
    }
    *trianglePolygons() {
      const { triangles: t } = this;
      for (let n = 0, e = t.length / 3; n < e; ++n)
        yield this.trianglePolygon(n);
    }
    trianglePolygon(t) {
      const n = new au();
      return this.renderTriangle(t, n), n.value();
    }
  }
  var pu = {},
    gu = {};
  function yu(t) {
    return new Function(
      "d",
      "return {" +
        t
          .map(function (t, n) {
            return JSON.stringify(t) + ": d[" + n + '] || ""';
          })
          .join(",") +
        "}"
    );
  }
  function vu(t) {
    var n = Object.create(null),
      e = [];
    return (
      t.forEach(function (t) {
        for (var r in t) r in n || e.push((n[r] = r));
      }),
      e
    );
  }
  function _u(t, n) {
    var e = t + "",
      r = e.length;
    return r < n ? new Array(n - r + 1).join(0) + e : e;
  }
  function bu(t) {
    var n = t.getUTCHours(),
      e = t.getUTCMinutes(),
      r = t.getUTCSeconds(),
      i = t.getUTCMilliseconds();
    return isNaN(t)
      ? "Invalid Date"
      : (function (t) {
          return t < 0 ? "-" + _u(-t, 6) : t > 9999 ? "+" + _u(t, 6) : _u(t, 4);
        })(t.getUTCFullYear()) +
          "-" +
          _u(t.getUTCMonth() + 1, 2) +
          "-" +
          _u(t.getUTCDate(), 2) +
          (i
            ? "T" +
              _u(n, 2) +
              ":" +
              _u(e, 2) +
              ":" +
              _u(r, 2) +
              "." +
              _u(i, 3) +
              "Z"
            : r
            ? "T" + _u(n, 2) + ":" + _u(e, 2) + ":" + _u(r, 2) + "Z"
            : e || n
            ? "T" + _u(n, 2) + ":" + _u(e, 2) + "Z"
            : "");
  }
  function mu(t) {
    var n = new RegExp('["' + t + "\n\r]"),
      e = t.charCodeAt(0);
    function r(t, n) {
      var r,
        i = [],
        o = t.length,
        a = 0,
        u = 0,
        c = o <= 0,
        f = !1;
      function s() {
        if (c) return gu;
        if (f) return (f = !1), pu;
        var n,
          r,
          i = a;
        if (34 === t.charCodeAt(i)) {
          for (
            ;
            (a++ < o && 34 !== t.charCodeAt(a)) || 34 === t.charCodeAt(++a);

          );
          return (
            (n = a) >= o
              ? (c = !0)
              : 10 === (r = t.charCodeAt(a++))
              ? (f = !0)
              : 13 === r && ((f = !0), 10 === t.charCodeAt(a) && ++a),
            t.slice(i + 1, n - 1).replace(/""/g, '"')
          );
        }
        for (; a < o; ) {
          if (10 === (r = t.charCodeAt((n = a++)))) f = !0;
          else if (13 === r) (f = !0), 10 === t.charCodeAt(a) && ++a;
          else if (r !== e) continue;
          return t.slice(i, n);
        }
        return (c = !0), t.slice(i, o);
      }
      for (
        10 === t.charCodeAt(o - 1) && --o, 13 === t.charCodeAt(o - 1) && --o;
        (r = s()) !== gu;

      ) {
        for (var l = []; r !== pu && r !== gu; ) l.push(r), (r = s());
        (n && null == (l = n(l, u++))) || i.push(l);
      }
      return i;
    }
    function i(n, e) {
      return n.map(function (n) {
        return e
          .map(function (t) {
            return a(n[t]);
          })
          .join(t);
      });
    }
    function o(n) {
      return n.map(a).join(t);
    }
    function a(t) {
      return null == t
        ? ""
        : t instanceof Date
        ? bu(t)
        : n.test((t += ""))
        ? '"' + t.replace(/"/g, '""') + '"'
        : t;
    }
    return {
      parse: function (t, n) {
        var e,
          i,
          o = r(t, function (t, r) {
            if (e) return e(t, r - 1);
            (i = t),
              (e = n
                ? (function (t, n) {
                    var e = yu(t);
                    return function (r, i) {
                      return n(e(r), i, t);
                    };
                  })(t, n)
                : yu(t));
          });
        return (o.columns = i || []), o;
      },
      parseRows: r,
      format: function (n, e) {
        return (
          null == e && (e = vu(n)),
          [e.map(a).join(t)].concat(i(n, e)).join("\n")
        );
      },
      formatBody: function (t, n) {
        return null == n && (n = vu(t)), i(t, n).join("\n");
      },
      formatRows: function (t) {
        return t.map(o).join("\n");
      },
      formatRow: o,
      formatValue: a,
    };
  }
  var xu = mu(","),
    wu = xu.parse,
    Mu = xu.parseRows,
    Au = xu.format,
    Tu = xu.formatBody,
    Su = xu.formatRows,
    Eu = xu.formatRow,
    ku = xu.formatValue,
    Nu = mu("\t"),
    Cu = Nu.parse,
    Pu = Nu.parseRows,
    zu = Nu.format,
    Du = Nu.formatBody,
    qu = Nu.formatRows,
    Ru = Nu.formatRow,
    Fu = Nu.formatValue;
  const Ou =
    new Date("2019-01-01T00:00").getHours() ||
    new Date("2019-07-01T00:00").getHours();
  function Iu(t) {
    if (!t.ok) throw new Error(t.status + " " + t.statusText);
    return t.blob();
  }
  function Uu(t) {
    if (!t.ok) throw new Error(t.status + " " + t.statusText);
    return t.arrayBuffer();
  }
  function Bu(t) {
    if (!t.ok) throw new Error(t.status + " " + t.statusText);
    return t.text();
  }
  function Yu(t, n) {
    return fetch(t, n).then(Bu);
  }
  function Lu(t) {
    return function (n, e, r) {
      return (
        2 === arguments.length &&
          "function" == typeof e &&
          ((r = e), (e = void 0)),
        Yu(n, e).then(function (n) {
          return t(n, r);
        })
      );
    };
  }
  var ju = Lu(wu),
    Hu = Lu(Cu);
  function Xu(t) {
    if (!t.ok) throw new Error(t.status + " " + t.statusText);
    if (204 !== t.status && 205 !== t.status) return t.json();
  }
  function Gu(t) {
    return (n, e) =>
      Yu(n, e).then((n) => new DOMParser().parseFromString(n, t));
  }
  var Vu = Gu("application/xml"),
    $u = Gu("text/html"),
    Wu = Gu("image/svg+xml");
  function Zu(t, n, e, r) {
    if (isNaN(n) || isNaN(e)) return t;
    var i,
      o,
      a,
      u,
      c,
      f,
      s,
      l,
      h,
      d = t._root,
      p = { data: r },
      g = t._x0,
      y = t._y0,
      v = t._x1,
      _ = t._y1;
    if (!d) return (t._root = p), t;
    for (; d.length; )
      if (
        ((f = n >= (o = (g + v) / 2)) ? (g = o) : (v = o),
        (s = e >= (a = (y + _) / 2)) ? (y = a) : (_ = a),
        (i = d),
        !(d = d[(l = (s << 1) | f)]))
      )
        return (i[l] = p), t;
    if (
      ((u = +t._x.call(null, d.data)),
      (c = +t._y.call(null, d.data)),
      n === u && e === c)
    )
      return (p.next = d), i ? (i[l] = p) : (t._root = p), t;
    do {
      (i = i ? (i[l] = new Array(4)) : (t._root = new Array(4))),
        (f = n >= (o = (g + v) / 2)) ? (g = o) : (v = o),
        (s = e >= (a = (y + _) / 2)) ? (y = a) : (_ = a);
    } while ((l = (s << 1) | f) == (h = ((c >= a) << 1) | (u >= o)));
    return (i[h] = d), (i[l] = p), t;
  }
  function Ku(t, n, e, r, i) {
    (this.node = t), (this.x0 = n), (this.y0 = e), (this.x1 = r), (this.y1 = i);
  }
  function Qu(t) {
    return t[0];
  }
  function Ju(t) {
    return t[1];
  }
  function tc(t, n, e) {
    var r = new nc(null == n ? Qu : n, null == e ? Ju : e, NaN, NaN, NaN, NaN);
    return null == t ? r : r.addAll(t);
  }
  function nc(t, n, e, r, i, o) {
    (this._x = t),
      (this._y = n),
      (this._x0 = e),
      (this._y0 = r),
      (this._x1 = i),
      (this._y1 = o),
      (this._root = void 0);
  }
  function ec(t) {
    for (var n = { data: t.data }, e = n; (t = t.next); )
      e = e.next = { data: t.data };
    return n;
  }
  var rc = (tc.prototype = nc.prototype);
  function ic(t) {
    return function () {
      return t;
    };
  }
  function oc(t) {
    return 1e-6 * (t() - 0.5);
  }
  function ac(t) {
    return t.x + t.vx;
  }
  function uc(t) {
    return t.y + t.vy;
  }
  function cc(t) {
    return t.index;
  }
  function fc(t, n) {
    var e = t.get(n);
    if (!e) throw new Error("node not found: " + n);
    return e;
  }
  (rc.copy = function () {
    var t,
      n,
      e = new nc(this._x, this._y, this._x0, this._y0, this._x1, this._y1),
      r = this._root;
    if (!r) return e;
    if (!r.length) return (e._root = ec(r)), e;
    for (t = [{ source: r, target: (e._root = new Array(4)) }]; (r = t.pop()); )
      for (var i = 0; i < 4; ++i)
        (n = r.source[i]) &&
          (n.length
            ? t.push({ source: n, target: (r.target[i] = new Array(4)) })
            : (r.target[i] = ec(n)));
    return e;
  }),
    (rc.add = function (t) {
      const n = +this._x.call(null, t),
        e = +this._y.call(null, t);
      return Zu(this.cover(n, e), n, e, t);
    }),
    (rc.addAll = function (t) {
      var n,
        e,
        r,
        i,
        o = t.length,
        a = new Array(o),
        u = new Array(o),
        c = 1 / 0,
        f = 1 / 0,
        s = -1 / 0,
        l = -1 / 0;
      for (e = 0; e < o; ++e)
        isNaN((r = +this._x.call(null, (n = t[e])))) ||
          isNaN((i = +this._y.call(null, n))) ||
          ((a[e] = r),
          (u[e] = i),
          r < c && (c = r),
          r > s && (s = r),
          i < f && (f = i),
          i > l && (l = i));
      if (c > s || f > l) return this;
      for (this.cover(c, f).cover(s, l), e = 0; e < o; ++e)
        Zu(this, a[e], u[e], t[e]);
      return this;
    }),
    (rc.cover = function (t, n) {
      if (isNaN((t = +t)) || isNaN((n = +n))) return this;
      var e = this._x0,
        r = this._y0,
        i = this._x1,
        o = this._y1;
      if (isNaN(e))
        (i = (e = Math.floor(t)) + 1), (o = (r = Math.floor(n)) + 1);
      else {
        for (
          var a, u, c = i - e || 1, f = this._root;
          e > t || t >= i || r > n || n >= o;

        )
          switch (
            ((u = ((n < r) << 1) | (t < e)),
            ((a = new Array(4))[u] = f),
            (f = a),
            (c *= 2),
            u)
          ) {
            case 0:
              (i = e + c), (o = r + c);
              break;
            case 1:
              (e = i - c), (o = r + c);
              break;
            case 2:
              (i = e + c), (r = o - c);
              break;
            case 3:
              (e = i - c), (r = o - c);
          }
        this._root && this._root.length && (this._root = f);
      }
      return (
        (this._x0 = e), (this._y0 = r), (this._x1 = i), (this._y1 = o), this
      );
    }),
    (rc.data = function () {
      var t = [];
      return (
        this.visit(function (n) {
          if (!n.length)
            do {
              t.push(n.data);
            } while ((n = n.next));
        }),
        t
      );
    }),
    (rc.extent = function (t) {
      return arguments.length
        ? this.cover(+t[0][0], +t[0][1]).cover(+t[1][0], +t[1][1])
        : isNaN(this._x0)
        ? void 0
        : [
            [this._x0, this._y0],
            [this._x1, this._y1],
          ];
    }),
    (rc.find = function (t, n, e) {
      var r,
        i,
        o,
        a,
        u,
        c,
        f,
        s = this._x0,
        l = this._y0,
        h = this._x1,
        d = this._y1,
        p = [],
        g = this._root;
      for (
        g && p.push(new Ku(g, s, l, h, d)),
          null == e
            ? (e = 1 / 0)
            : ((s = t - e), (l = n - e), (h = t + e), (d = n + e), (e *= e));
        (c = p.pop());

      )
        if (
          !(
            !(g = c.node) ||
            (i = c.x0) > h ||
            (o = c.y0) > d ||
            (a = c.x1) < s ||
            (u = c.y1) < l
          )
        )
          if (g.length) {
            var y = (i + a) / 2,
              v = (o + u) / 2;
            p.push(
              new Ku(g[3], y, v, a, u),
              new Ku(g[2], i, v, y, u),
              new Ku(g[1], y, o, a, v),
              new Ku(g[0], i, o, y, v)
            ),
              (f = ((n >= v) << 1) | (t >= y)) &&
                ((c = p[p.length - 1]),
                (p[p.length - 1] = p[p.length - 1 - f]),
                (p[p.length - 1 - f] = c));
          } else {
            var _ = t - +this._x.call(null, g.data),
              b = n - +this._y.call(null, g.data),
              m = _ * _ + b * b;
            if (m < e) {
              var x = Math.sqrt((e = m));
              (s = t - x), (l = n - x), (h = t + x), (d = n + x), (r = g.data);
            }
          }
      return r;
    }),
    (rc.remove = function (t) {
      if (
        isNaN((o = +this._x.call(null, t))) ||
        isNaN((a = +this._y.call(null, t)))
      )
        return this;
      var n,
        e,
        r,
        i,
        o,
        a,
        u,
        c,
        f,
        s,
        l,
        h,
        d = this._root,
        p = this._x0,
        g = this._y0,
        y = this._x1,
        v = this._y1;
      if (!d) return this;
      if (d.length)
        for (;;) {
          if (
            ((f = o >= (u = (p + y) / 2)) ? (p = u) : (y = u),
            (s = a >= (c = (g + v) / 2)) ? (g = c) : (v = c),
            (n = d),
            !(d = d[(l = (s << 1) | f)]))
          )
            return this;
          if (!d.length) break;
          (n[(l + 1) & 3] || n[(l + 2) & 3] || n[(l + 3) & 3]) &&
            ((e = n), (h = l));
        }
      for (; d.data !== t; ) if (((r = d), !(d = d.next))) return this;
      return (
        (i = d.next) && delete d.next,
        r
          ? (i ? (r.next = i) : delete r.next, this)
          : n
          ? (i ? (n[l] = i) : delete n[l],
            (d = n[0] || n[1] || n[2] || n[3]) &&
              d === (n[3] || n[2] || n[1] || n[0]) &&
              !d.length &&
              (e ? (e[h] = d) : (this._root = d)),
            this)
          : ((this._root = i), this)
      );
    }),
    (rc.removeAll = function (t) {
      for (var n = 0, e = t.length; n < e; ++n) this.remove(t[n]);
      return this;
    }),
    (rc.root = function () {
      return this._root;
    }),
    (rc.size = function () {
      var t = 0;
      return (
        this.visit(function (n) {
          if (!n.length)
            do {
              ++t;
            } while ((n = n.next));
        }),
        t
      );
    }),
    (rc.visit = function (t) {
      var n,
        e,
        r,
        i,
        o,
        a,
        u = [],
        c = this._root;
      for (
        c && u.push(new Ku(c, this._x0, this._y0, this._x1, this._y1));
        (n = u.pop());

      )
        if (
          !t((c = n.node), (r = n.x0), (i = n.y0), (o = n.x1), (a = n.y1)) &&
          c.length
        ) {
          var f = (r + o) / 2,
            s = (i + a) / 2;
          (e = c[3]) && u.push(new Ku(e, f, s, o, a)),
            (e = c[2]) && u.push(new Ku(e, r, s, f, a)),
            (e = c[1]) && u.push(new Ku(e, f, i, o, s)),
            (e = c[0]) && u.push(new Ku(e, r, i, f, s));
        }
      return this;
    }),
    (rc.visitAfter = function (t) {
      var n,
        e = [],
        r = [];
      for (
        this._root &&
        e.push(new Ku(this._root, this._x0, this._y0, this._x1, this._y1));
        (n = e.pop());

      ) {
        var i = n.node;
        if (i.length) {
          var o,
            a = n.x0,
            u = n.y0,
            c = n.x1,
            f = n.y1,
            s = (a + c) / 2,
            l = (u + f) / 2;
          (o = i[0]) && e.push(new Ku(o, a, u, s, l)),
            (o = i[1]) && e.push(new Ku(o, s, u, c, l)),
            (o = i[2]) && e.push(new Ku(o, a, l, s, f)),
            (o = i[3]) && e.push(new Ku(o, s, l, c, f));
        }
        r.push(n);
      }
      for (; (n = r.pop()); ) t(n.node, n.x0, n.y0, n.x1, n.y1);
      return this;
    }),
    (rc.x = function (t) {
      return arguments.length ? ((this._x = t), this) : this._x;
    }),
    (rc.y = function (t) {
      return arguments.length ? ((this._y = t), this) : this._y;
    });
  const sc = 4294967296;
  function lc(t) {
    return t.x;
  }
  function hc(t) {
    return t.y;
  }
  var dc = Math.PI * (3 - Math.sqrt(5));
  function pc(t, n) {
    if (
      (e = (t = n ? t.toExponential(n - 1) : t.toExponential()).indexOf("e")) <
      0
    )
      return null;
    var e,
      r = t.slice(0, e);
    return [r.length > 1 ? r[0] + r.slice(2) : r, +t.slice(e + 1)];
  }
  function gc(t) {
    return (t = pc(Math.abs(t))) ? t[1] : NaN;
  }
  var yc,
    vc =
      /^(?:(.)?([<>=^]))?([+\-( ])?([$#])?(0)?(\d+)?(,)?(\.\d+)?(~)?([a-z%])?$/i;
  function _c(t) {
    if (!(n = vc.exec(t))) throw new Error("invalid format: " + t);
    var n;
    return new bc({
      fill: n[1],
      align: n[2],
      sign: n[3],
      symbol: n[4],
      zero: n[5],
      width: n[6],
      comma: n[7],
      precision: n[8] && n[8].slice(1),
      trim: n[9],
      type: n[10],
    });
  }
  function bc(t) {
    (this.fill = void 0 === t.fill ? " " : t.fill + ""),
      (this.align = void 0 === t.align ? ">" : t.align + ""),
      (this.sign = void 0 === t.sign ? "-" : t.sign + ""),
      (this.symbol = void 0 === t.symbol ? "" : t.symbol + ""),
      (this.zero = !!t.zero),
      (this.width = void 0 === t.width ? void 0 : +t.width),
      (this.comma = !!t.comma),
      (this.precision = void 0 === t.precision ? void 0 : +t.precision),
      (this.trim = !!t.trim),
      (this.type = void 0 === t.type ? "" : t.type + "");
  }
  function mc(t, n) {
    var e = pc(t, n);
    if (!e) return t + "";
    var r = e[0],
      i = e[1];
    return i < 0
      ? "0." + new Array(-i).join("0") + r
      : r.length > i + 1
      ? r.slice(0, i + 1) + "." + r.slice(i + 1)
      : r + new Array(i - r.length + 2).join("0");
  }
  (_c.prototype = bc.prototype),
    (bc.prototype.toString = function () {
      return (
        this.fill +
        this.align +
        this.sign +
        this.symbol +
        (this.zero ? "0" : "") +
        (void 0 === this.width ? "" : Math.max(1, 0 | this.width)) +
        (this.comma ? "," : "") +
        (void 0 === this.precision
          ? ""
          : "." + Math.max(0, 0 | this.precision)) +
        (this.trim ? "~" : "") +
        this.type
      );
    });
  var xc = {
    "%": (t, n) => (100 * t).toFixed(n),
    b: (t) => Math.round(t).toString(2),
    c: (t) => t + "",
    d: function (t) {
      return Math.abs((t = Math.round(t))) >= 1e21
        ? t.toLocaleString("en").replace(/,/g, "")
        : t.toString(10);
    },
    e: (t, n) => t.toExponential(n),
    f: (t, n) => t.toFixed(n),
    g: (t, n) => t.toPrecision(n),
    o: (t) => Math.round(t).toString(8),
    p: (t, n) => mc(100 * t, n),
    r: mc,
    s: function (t, n) {
      var e = pc(t, n);
      if (!e) return t + "";
      var r = e[0],
        i = e[1],
        o = i - (yc = 3 * Math.max(-8, Math.min(8, Math.floor(i / 3)))) + 1,
        a = r.length;
      return o === a
        ? r
        : o > a
        ? r + new Array(o - a + 1).join("0")
        : o > 0
        ? r.slice(0, o) + "." + r.slice(o)
        : "0." + new Array(1 - o).join("0") + pc(t, Math.max(0, n + o - 1))[0];
    },
    X: (t) => Math.round(t).toString(16).toUpperCase(),
    x: (t) => Math.round(t).toString(16),
  };
  function wc(t) {
    return t;
  }
  var Mc,
    Ac = Array.prototype.map,
    Tc = [
      "y",
      "z",
      "a",
      "f",
      "p",
      "n",
      "µ",
      "m",
      "",
      "k",
      "M",
      "G",
      "T",
      "P",
      "E",
      "Z",
      "Y",
    ];
  function Sc(t) {
    var n,
      e,
      r =
        void 0 === t.grouping || void 0 === t.thousands
          ? wc
          : ((n = Ac.call(t.grouping, Number)),
            (e = t.thousands + ""),
            function (t, r) {
              for (
                var i = t.length, o = [], a = 0, u = n[0], c = 0;
                i > 0 &&
                u > 0 &&
                (c + u + 1 > r && (u = Math.max(1, r - c)),
                o.push(t.substring((i -= u), i + u)),
                !((c += u + 1) > r));

              )
                u = n[(a = (a + 1) % n.length)];
              return o.reverse().join(e);
            }),
      i = void 0 === t.currency ? "" : t.currency[0] + "",
      o = void 0 === t.currency ? "" : t.currency[1] + "",
      a = void 0 === t.decimal ? "." : t.decimal + "",
      u =
        void 0 === t.numerals
          ? wc
          : (function (t) {
              return function (n) {
                return n.replace(/[0-9]/g, function (n) {
                  return t[+n];
                });
              };
            })(Ac.call(t.numerals, String)),
      c = void 0 === t.percent ? "%" : t.percent + "",
      f = void 0 === t.minus ? "−" : t.minus + "",
      s = void 0 === t.nan ? "NaN" : t.nan + "";
    function l(t) {
      var n = (t = _c(t)).fill,
        e = t.align,
        l = t.sign,
        h = t.symbol,
        d = t.zero,
        p = t.width,
        g = t.comma,
        y = t.precision,
        v = t.trim,
        _ = t.type;
      "n" === _
        ? ((g = !0), (_ = "g"))
        : xc[_] || (void 0 === y && (y = 12), (v = !0), (_ = "g")),
        (d || ("0" === n && "=" === e)) && ((d = !0), (n = "0"), (e = "="));
      var b =
          "$" === h
            ? i
            : "#" === h && /[boxX]/.test(_)
            ? "0" + _.toLowerCase()
            : "",
        m = "$" === h ? o : /[%p]/.test(_) ? c : "",
        x = xc[_],
        w = /[defgprs%]/.test(_);
      function M(t) {
        var i,
          o,
          c,
          h = b,
          M = m;
        if ("c" === _) (M = x(t) + M), (t = "");
        else {
          var A = (t = +t) < 0 || 1 / t < 0;
          if (
            ((t = isNaN(t) ? s : x(Math.abs(t), y)),
            v &&
              (t = (function (t) {
                t: for (var n, e = t.length, r = 1, i = -1; r < e; ++r)
                  switch (t[r]) {
                    case ".":
                      i = n = r;
                      break;
                    case "0":
                      0 === i && (i = r), (n = r);
                      break;
                    default:
                      if (!+t[r]) break t;
                      i > 0 && (i = 0);
                  }
                return i > 0 ? t.slice(0, i) + t.slice(n + 1) : t;
              })(t)),
            A && 0 == +t && "+" !== l && (A = !1),
            (h =
              (A ? ("(" === l ? l : f) : "-" === l || "(" === l ? "" : l) + h),
            (M =
              ("s" === _ ? Tc[8 + yc / 3] : "") +
              M +
              (A && "(" === l ? ")" : "")),
            w)
          )
            for (i = -1, o = t.length; ++i < o; )
              if (48 > (c = t.charCodeAt(i)) || c > 57) {
                (M = (46 === c ? a + t.slice(i + 1) : t.slice(i)) + M),
                  (t = t.slice(0, i));
                break;
              }
        }
        g && !d && (t = r(t, 1 / 0));
        var T = h.length + t.length + M.length,
          S = T < p ? new Array(p - T + 1).join(n) : "";
        switch (
          (g &&
            d &&
            ((t = r(S + t, S.length ? p - M.length : 1 / 0)), (S = "")),
          e)
        ) {
          case "<":
            t = h + t + M + S;
            break;
          case "=":
            t = h + S + t + M;
            break;
          case "^":
            t = S.slice(0, (T = S.length >> 1)) + h + t + M + S.slice(T);
            break;
          default:
            t = S + h + t + M;
        }
        return u(t);
      }
      return (
        (y =
          void 0 === y
            ? 6
            : /[gprs]/.test(_)
            ? Math.max(1, Math.min(21, y))
            : Math.max(0, Math.min(20, y))),
        (M.toString = function () {
          return t + "";
        }),
        M
      );
    }
    return {
      format: l,
      formatPrefix: function (t, n) {
        var e = l((((t = _c(t)).type = "f"), t)),
          r = 3 * Math.max(-8, Math.min(8, Math.floor(gc(n) / 3))),
          i = Math.pow(10, -r),
          o = Tc[8 + r / 3];
        return function (t) {
          return e(i * t) + o;
        };
      },
    };
  }
  function Ec(n) {
    return (
      (Mc = Sc(n)),
      (t.format = Mc.format),
      (t.formatPrefix = Mc.formatPrefix),
      Mc
    );
  }
  function kc(t) {
    return Math.max(0, -gc(Math.abs(t)));
  }
  function Nc(t, n) {
    return Math.max(
      0,
      3 * Math.max(-8, Math.min(8, Math.floor(gc(n) / 3))) - gc(Math.abs(t))
    );
  }
  function Cc(t, n) {
    return (
      (t = Math.abs(t)), (n = Math.abs(n) - t), Math.max(0, gc(n) - gc(t)) + 1
    );
  }
  (t.format = void 0),
    (t.formatPrefix = void 0),
    Ec({ thousands: ",", grouping: [3], currency: ["$", ""] });
  var Pc = 1e-6,
    zc = 1e-12,
    Dc = Math.PI,
    qc = Dc / 2,
    Rc = Dc / 4,
    Fc = 2 * Dc,
    Oc = 180 / Dc,
    Ic = Dc / 180,
    Uc = Math.abs,
    Bc = Math.atan,
    Yc = Math.atan2,
    Lc = Math.cos,
    jc = Math.ceil,
    Hc = Math.exp,
    Xc = Math.hypot,
    Gc = Math.log,
    Vc = Math.pow,
    $c = Math.sin,
    Wc =
      Math.sign ||
      function (t) {
        return t > 0 ? 1 : t < 0 ? -1 : 0;
      },
    Zc = Math.sqrt,
    Kc = Math.tan;
  function Qc(t) {
    return t > 1 ? 0 : t < -1 ? Dc : Math.acos(t);
  }
  function Jc(t) {
    return t > 1 ? qc : t < -1 ? -qc : Math.asin(t);
  }
  function tf(t) {
    return (t = $c(t / 2)) * t;
  }
  function nf() {}
  function ef(t, n) {
    t && of.hasOwnProperty(t.type) && of[t.type](t, n);
  }
  var rf = {
      Feature: function (t, n) {
        ef(t.geometry, n);
      },
      FeatureCollection: function (t, n) {
        for (var e = t.features, r = -1, i = e.length; ++r < i; )
          ef(e[r].geometry, n);
      },
    },
    of = {
      Sphere: function (t, n) {
        n.sphere();
      },
      Point: function (t, n) {
        (t = t.coordinates), n.point(t[0], t[1], t[2]);
      },
      MultiPoint: function (t, n) {
        for (var e = t.coordinates, r = -1, i = e.length; ++r < i; )
          (t = e[r]), n.point(t[0], t[1], t[2]);
      },
      LineString: function (t, n) {
        af(t.coordinates, n, 0);
      },
      MultiLineString: function (t, n) {
        for (var e = t.coordinates, r = -1, i = e.length; ++r < i; )
          af(e[r], n, 0);
      },
      Polygon: function (t, n) {
        uf(t.coordinates, n);
      },
      MultiPolygon: function (t, n) {
        for (var e = t.coordinates, r = -1, i = e.length; ++r < i; )
          uf(e[r], n);
      },
      GeometryCollection: function (t, n) {
        for (var e = t.geometries, r = -1, i = e.length; ++r < i; ) ef(e[r], n);
      },
    };
  function af(t, n, e) {
    var r,
      i = -1,
      o = t.length - e;
    for (n.lineStart(); ++i < o; ) (r = t[i]), n.point(r[0], r[1], r[2]);
    n.lineEnd();
  }
  function uf(t, n) {
    var e = -1,
      r = t.length;
    for (n.polygonStart(); ++e < r; ) af(t[e], n, 1);
    n.polygonEnd();
  }
  function cf(t, n) {
    t && rf.hasOwnProperty(t.type) ? rf[t.type](t, n) : ef(t, n);
  }
  var ff,
    sf,
    lf,
    hf,
    df,
    pf,
    gf,
    yf,
    vf,
    _f,
    bf,
    mf,
    xf,
    wf,
    Mf,
    Af,
    Tf = new g(),
    Sf = new g(),
    Ef = {
      point: nf,
      lineStart: nf,
      lineEnd: nf,
      polygonStart: function () {
        (Tf = new g()), (Ef.lineStart = kf), (Ef.lineEnd = Nf);
      },
      polygonEnd: function () {
        var t = +Tf;
        Sf.add(t < 0 ? Fc + t : t),
          (this.lineStart = this.lineEnd = this.point = nf);
      },
      sphere: function () {
        Sf.add(Fc);
      },
    };
  function kf() {
    Ef.point = Cf;
  }
  function Nf() {
    Pf(ff, sf);
  }
  function Cf(t, n) {
    (Ef.point = Pf),
      (ff = t),
      (sf = n),
      (lf = t *= Ic),
      (hf = Lc((n = (n *= Ic) / 2 + Rc))),
      (df = $c(n));
  }
  function Pf(t, n) {
    var e = (t *= Ic) - lf,
      r = e >= 0 ? 1 : -1,
      i = r * e,
      o = Lc((n = (n *= Ic) / 2 + Rc)),
      a = $c(n),
      u = df * a,
      c = hf * o + u * Lc(i),
      f = u * r * $c(i);
    Tf.add(Yc(f, c)), (lf = t), (hf = o), (df = a);
  }
  function zf(t) {
    return [Yc(t[1], t[0]), Jc(t[2])];
  }
  function Df(t) {
    var n = t[0],
      e = t[1],
      r = Lc(e);
    return [r * Lc(n), r * $c(n), $c(e)];
  }
  function qf(t, n) {
    return t[0] * n[0] + t[1] * n[1] + t[2] * n[2];
  }
  function Rf(t, n) {
    return [
      t[1] * n[2] - t[2] * n[1],
      t[2] * n[0] - t[0] * n[2],
      t[0] * n[1] - t[1] * n[0],
    ];
  }
  function Ff(t, n) {
    (t[0] += n[0]), (t[1] += n[1]), (t[2] += n[2]);
  }
  function Of(t, n) {
    return [t[0] * n, t[1] * n, t[2] * n];
  }
  function If(t) {
    var n = Zc(t[0] * t[0] + t[1] * t[1] + t[2] * t[2]);
    (t[0] /= n), (t[1] /= n), (t[2] /= n);
  }
  var Uf,
    Bf,
    Yf,
    Lf,
    jf,
    Hf,
    Xf,
    Gf,
    Vf,
    $f,
    Wf,
    Zf,
    Kf,
    Qf,
    Jf,
    ts,
    ns = {
      point: es,
      lineStart: is,
      lineEnd: os,
      polygonStart: function () {
        (ns.point = as),
          (ns.lineStart = us),
          (ns.lineEnd = cs),
          (wf = new g()),
          Ef.polygonStart();
      },
      polygonEnd: function () {
        Ef.polygonEnd(),
          (ns.point = es),
          (ns.lineStart = is),
          (ns.lineEnd = os),
          Tf < 0
            ? ((pf = -(yf = 180)), (gf = -(vf = 90)))
            : wf > Pc
            ? (vf = 90)
            : wf < -1e-6 && (gf = -90),
          (Af[0] = pf),
          (Af[1] = yf);
      },
      sphere: function () {
        (pf = -(yf = 180)), (gf = -(vf = 90));
      },
    };
  function es(t, n) {
    Mf.push((Af = [(pf = t), (yf = t)])),
      n < gf && (gf = n),
      n > vf && (vf = n);
  }
  function rs(t, n) {
    var e = Df([t * Ic, n * Ic]);
    if (xf) {
      var r = Rf(xf, e),
        i = Rf([r[1], -r[0], 0], r);
      If(i), (i = zf(i));
      var o,
        a = t - _f,
        u = a > 0 ? 1 : -1,
        c = i[0] * Oc * u,
        f = Uc(a) > 180;
      f ^ (u * _f < c && c < u * t)
        ? (o = i[1] * Oc) > vf && (vf = o)
        : f ^ (u * _f < (c = ((c + 360) % 360) - 180) && c < u * t)
        ? (o = -i[1] * Oc) < gf && (gf = o)
        : (n < gf && (gf = n), n > vf && (vf = n)),
        f
          ? t < _f
            ? fs(pf, t) > fs(pf, yf) && (yf = t)
            : fs(t, yf) > fs(pf, yf) && (pf = t)
          : yf >= pf
          ? (t < pf && (pf = t), t > yf && (yf = t))
          : t > _f
          ? fs(pf, t) > fs(pf, yf) && (yf = t)
          : fs(t, yf) > fs(pf, yf) && (pf = t);
    } else Mf.push((Af = [(pf = t), (yf = t)]));
    n < gf && (gf = n), n > vf && (vf = n), (xf = e), (_f = t);
  }
  function is() {
    ns.point = rs;
  }
  function os() {
    (Af[0] = pf), (Af[1] = yf), (ns.point = es), (xf = null);
  }
  function as(t, n) {
    if (xf) {
      var e = t - _f;
      wf.add(Uc(e) > 180 ? e + (e > 0 ? 360 : -360) : e);
    } else (bf = t), (mf = n);
    Ef.point(t, n), rs(t, n);
  }
  function us() {
    Ef.lineStart();
  }
  function cs() {
    as(bf, mf),
      Ef.lineEnd(),
      Uc(wf) > Pc && (pf = -(yf = 180)),
      (Af[0] = pf),
      (Af[1] = yf),
      (xf = null);
  }
  function fs(t, n) {
    return (n -= t) < 0 ? n + 360 : n;
  }
  function ss(t, n) {
    return t[0] - n[0];
  }
  function ls(t, n) {
    return t[0] <= t[1] ? t[0] <= n && n <= t[1] : n < t[0] || t[1] < n;
  }
  var hs = {
    sphere: nf,
    point: ds,
    lineStart: gs,
    lineEnd: _s,
    polygonStart: function () {
      (hs.lineStart = bs), (hs.lineEnd = ms);
    },
    polygonEnd: function () {
      (hs.lineStart = gs), (hs.lineEnd = _s);
    },
  };
  function ds(t, n) {
    t *= Ic;
    var e = Lc((n *= Ic));
    ps(e * Lc(t), e * $c(t), $c(n));
  }
  function ps(t, n, e) {
    ++Uf, (Yf += (t - Yf) / Uf), (Lf += (n - Lf) / Uf), (jf += (e - jf) / Uf);
  }
  function gs() {
    hs.point = ys;
  }
  function ys(t, n) {
    t *= Ic;
    var e = Lc((n *= Ic));
    (Qf = e * Lc(t)),
      (Jf = e * $c(t)),
      (ts = $c(n)),
      (hs.point = vs),
      ps(Qf, Jf, ts);
  }
  function vs(t, n) {
    t *= Ic;
    var e = Lc((n *= Ic)),
      r = e * Lc(t),
      i = e * $c(t),
      o = $c(n),
      a = Yc(
        Zc(
          (a = Jf * o - ts * i) * a +
            (a = ts * r - Qf * o) * a +
            (a = Qf * i - Jf * r) * a
        ),
        Qf * r + Jf * i + ts * o
      );
    (Bf += a),
      (Hf += a * (Qf + (Qf = r))),
      (Xf += a * (Jf + (Jf = i))),
      (Gf += a * (ts + (ts = o))),
      ps(Qf, Jf, ts);
  }
  function _s() {
    hs.point = ds;
  }
  function bs() {
    hs.point = xs;
  }
  function ms() {
    ws(Zf, Kf), (hs.point = ds);
  }
  function xs(t, n) {
    (Zf = t), (Kf = n), (t *= Ic), (n *= Ic), (hs.point = ws);
    var e = Lc(n);
    (Qf = e * Lc(t)), (Jf = e * $c(t)), (ts = $c(n)), ps(Qf, Jf, ts);
  }
  function ws(t, n) {
    t *= Ic;
    var e = Lc((n *= Ic)),
      r = e * Lc(t),
      i = e * $c(t),
      o = $c(n),
      a = Jf * o - ts * i,
      u = ts * r - Qf * o,
      c = Qf * i - Jf * r,
      f = Xc(a, u, c),
      s = Jc(f),
      l = f && -s / f;
    Vf.add(l * a),
      $f.add(l * u),
      Wf.add(l * c),
      (Bf += s),
      (Hf += s * (Qf + (Qf = r))),
      (Xf += s * (Jf + (Jf = i))),
      (Gf += s * (ts + (ts = o))),
      ps(Qf, Jf, ts);
  }
  function Ms(t) {
    return function () {
      return t;
    };
  }
  function As(t, n) {
    function e(e, r) {
      return (e = t(e, r)), n(e[0], e[1]);
    }
    return (
      t.invert &&
        n.invert &&
        (e.invert = function (e, r) {
          return (e = n.invert(e, r)) && t.invert(e[0], e[1]);
        }),
      e
    );
  }
  function Ts(t, n) {
    return [Uc(t) > Dc ? t + Math.round(-t / Fc) * Fc : t, n];
  }
  function Ss(t, n, e) {
    return (t %= Fc)
      ? n || e
        ? As(ks(t), Ns(n, e))
        : ks(t)
      : n || e
      ? Ns(n, e)
      : Ts;
  }
  function Es(t) {
    return function (n, e) {
      return [(n += t) > Dc ? n - Fc : n < -Dc ? n + Fc : n, e];
    };
  }
  function ks(t) {
    var n = Es(t);
    return (n.invert = Es(-t)), n;
  }
  function Ns(t, n) {
    var e = Lc(t),
      r = $c(t),
      i = Lc(n),
      o = $c(n);
    function a(t, n) {
      var a = Lc(n),
        u = Lc(t) * a,
        c = $c(t) * a,
        f = $c(n),
        s = f * e + u * r;
      return [Yc(c * i - s * o, u * e - f * r), Jc(s * i + c * o)];
    }
    return (
      (a.invert = function (t, n) {
        var a = Lc(n),
          u = Lc(t) * a,
          c = $c(t) * a,
          f = $c(n),
          s = f * i - c * o;
        return [Yc(c * i + f * o, u * e + s * r), Jc(s * e - u * r)];
      }),
      a
    );
  }
  function Cs(t) {
    function n(n) {
      return ((n = t(n[0] * Ic, n[1] * Ic))[0] *= Oc), (n[1] *= Oc), n;
    }
    return (
      (t = Ss(t[0] * Ic, t[1] * Ic, t.length > 2 ? t[2] * Ic : 0)),
      (n.invert = function (n) {
        return ((n = t.invert(n[0] * Ic, n[1] * Ic))[0] *= Oc), (n[1] *= Oc), n;
      }),
      n
    );
  }
  function Ps(t, n, e, r, i, o) {
    if (e) {
      var a = Lc(n),
        u = $c(n),
        c = r * e;
      null == i
        ? ((i = n + r * Fc), (o = n - c / 2))
        : ((i = zs(a, i)),
          (o = zs(a, o)),
          (r > 0 ? i < o : i > o) && (i += r * Fc));
      for (var f, s = i; r > 0 ? s > o : s < o; s -= c)
        (f = zf([a, -u * Lc(s), -u * $c(s)])), t.point(f[0], f[1]);
    }
  }
  function zs(t, n) {
    ((n = Df(n))[0] -= t), If(n);
    var e = Qc(-n[1]);
    return ((-n[2] < 0 ? -e : e) + Fc - Pc) % Fc;
  }
  function Ds() {
    var t,
      n = [];
    return {
      point: function (n, e, r) {
        t.push([n, e, r]);
      },
      lineStart: function () {
        n.push((t = []));
      },
      lineEnd: nf,
      rejoin: function () {
        n.length > 1 && n.push(n.pop().concat(n.shift()));
      },
      result: function () {
        var e = n;
        return (n = []), (t = null), e;
      },
    };
  }
  function qs(t, n) {
    return Uc(t[0] - n[0]) < Pc && Uc(t[1] - n[1]) < Pc;
  }
  function Rs(t, n, e, r) {
    (this.x = t),
      (this.z = n),
      (this.o = e),
      (this.e = r),
      (this.v = !1),
      (this.n = this.p = null);
  }
  function Fs(t, n, e, r, i) {
    var o,
      a,
      u = [],
      c = [];
    if (
      (t.forEach(function (t) {
        if (!((n = t.length - 1) <= 0)) {
          var n,
            e,
            r = t[0],
            a = t[n];
          if (qs(r, a)) {
            if (!r[2] && !a[2]) {
              for (i.lineStart(), o = 0; o < n; ++o)
                i.point((r = t[o])[0], r[1]);
              return void i.lineEnd();
            }
            a[0] += 2e-6;
          }
          u.push((e = new Rs(r, t, null, !0))),
            c.push((e.o = new Rs(r, null, e, !1))),
            u.push((e = new Rs(a, t, null, !1))),
            c.push((e.o = new Rs(a, null, e, !0)));
        }
      }),
      u.length)
    ) {
      for (c.sort(n), Os(u), Os(c), o = 0, a = c.length; o < a; ++o)
        c[o].e = e = !e;
      for (var f, s, l = u[0]; ; ) {
        for (var h = l, d = !0; h.v; ) if ((h = h.n) === l) return;
        (f = h.z), i.lineStart();
        do {
          if (((h.v = h.o.v = !0), h.e)) {
            if (d)
              for (o = 0, a = f.length; o < a; ++o)
                i.point((s = f[o])[0], s[1]);
            else r(h.x, h.n.x, 1, i);
            h = h.n;
          } else {
            if (d)
              for (f = h.p.z, o = f.length - 1; o >= 0; --o)
                i.point((s = f[o])[0], s[1]);
            else r(h.x, h.p.x, -1, i);
            h = h.p;
          }
          (f = (h = h.o).z), (d = !d);
        } while (!h.v);
        i.lineEnd();
      }
    }
  }
  function Os(t) {
    if ((n = t.length)) {
      for (var n, e, r = 0, i = t[0]; ++r < n; )
        (i.n = e = t[r]), (e.p = i), (i = e);
      (i.n = e = t[0]), (e.p = i);
    }
  }
  function Is(t) {
    return Uc(t[0]) <= Dc ? t[0] : Wc(t[0]) * (((Uc(t[0]) + Dc) % Fc) - Dc);
  }
  function Us(t, n) {
    var e = Is(n),
      r = n[1],
      i = $c(r),
      o = [$c(e), -Lc(e), 0],
      a = 0,
      u = 0,
      c = new g();
    1 === i ? (r = qc + Pc) : -1 === i && (r = -qc - Pc);
    for (var f = 0, s = t.length; f < s; ++f)
      if ((h = (l = t[f]).length))
        for (
          var l,
            h,
            d = l[h - 1],
            p = Is(d),
            y = d[1] / 2 + Rc,
            v = $c(y),
            _ = Lc(y),
            b = 0;
          b < h;
          ++b, p = x, v = M, _ = A, d = m
        ) {
          var m = l[b],
            x = Is(m),
            w = m[1] / 2 + Rc,
            M = $c(w),
            A = Lc(w),
            T = x - p,
            S = T >= 0 ? 1 : -1,
            E = S * T,
            k = E > Dc,
            N = v * M;
          if (
            (c.add(Yc(N * S * $c(E), _ * A + N * Lc(E))),
            (a += k ? T + S * Fc : T),
            k ^ (p >= e) ^ (x >= e))
          ) {
            var C = Rf(Df(d), Df(m));
            If(C);
            var P = Rf(o, C);
            If(P);
            var z = (k ^ (T >= 0) ? -1 : 1) * Jc(P[2]);
            (r > z || (r === z && (C[0] || C[1]))) &&
              (u += k ^ (T >= 0) ? 1 : -1);
          }
        }
    return (a < -1e-6 || (a < Pc && c < -1e-12)) ^ (1 & u);
  }
  function Bs(t, n, e, r) {
    return function (i) {
      var o,
        a,
        u,
        c = n(i),
        f = Ds(),
        s = n(f),
        l = !1,
        h = {
          point: d,
          lineStart: g,
          lineEnd: y,
          polygonStart: function () {
            (h.point = v),
              (h.lineStart = _),
              (h.lineEnd = b),
              (a = []),
              (o = []);
          },
          polygonEnd: function () {
            (h.point = d), (h.lineStart = g), (h.lineEnd = y), (a = Z(a));
            var t = Us(o, r);
            a.length
              ? (l || (i.polygonStart(), (l = !0)), Fs(a, Ls, t, e, i))
              : t &&
                (l || (i.polygonStart(), (l = !0)),
                i.lineStart(),
                e(null, null, 1, i),
                i.lineEnd()),
              l && (i.polygonEnd(), (l = !1)),
              (a = o = null);
          },
          sphere: function () {
            i.polygonStart(),
              i.lineStart(),
              e(null, null, 1, i),
              i.lineEnd(),
              i.polygonEnd();
          },
        };
      function d(n, e) {
        t(n, e) && i.point(n, e);
      }
      function p(t, n) {
        c.point(t, n);
      }
      function g() {
        (h.point = p), c.lineStart();
      }
      function y() {
        (h.point = d), c.lineEnd();
      }
      function v(t, n) {
        u.push([t, n]), s.point(t, n);
      }
      function _() {
        s.lineStart(), (u = []);
      }
      function b() {
        v(u[0][0], u[0][1]), s.lineEnd();
        var t,
          n,
          e,
          r,
          c = s.clean(),
          h = f.result(),
          d = h.length;
        if ((u.pop(), o.push(u), (u = null), d))
          if (1 & c) {
            if ((n = (e = h[0]).length - 1) > 0) {
              for (
                l || (i.polygonStart(), (l = !0)), i.lineStart(), t = 0;
                t < n;
                ++t
              )
                i.point((r = e[t])[0], r[1]);
              i.lineEnd();
            }
          } else
            d > 1 && 2 & c && h.push(h.pop().concat(h.shift())),
              a.push(h.filter(Ys));
      }
      return h;
    };
  }
  function Ys(t) {
    return t.length > 1;
  }
  function Ls(t, n) {
    return (
      ((t = t.x)[0] < 0 ? t[1] - qc - Pc : qc - t[1]) -
      ((n = n.x)[0] < 0 ? n[1] - qc - Pc : qc - n[1])
    );
  }
  Ts.invert = Ts;
  var js = Bs(
    function () {
      return !0;
    },
    function (t) {
      var n,
        e = NaN,
        r = NaN,
        i = NaN;
      return {
        lineStart: function () {
          t.lineStart(), (n = 1);
        },
        point: function (o, a) {
          var u = o > 0 ? Dc : -Dc,
            c = Uc(o - e);
          Uc(c - Dc) < Pc
            ? (t.point(e, (r = (r + a) / 2 > 0 ? qc : -qc)),
              t.point(i, r),
              t.lineEnd(),
              t.lineStart(),
              t.point(u, r),
              t.point(o, r),
              (n = 0))
            : i !== u &&
              c >= Dc &&
              (Uc(e - i) < Pc && (e -= i * Pc),
              Uc(o - u) < Pc && (o -= u * Pc),
              (r = (function (t, n, e, r) {
                var i,
                  o,
                  a = $c(t - e);
                return Uc(a) > Pc
                  ? Bc(
                      ($c(n) * (o = Lc(r)) * $c(e) -
                        $c(r) * (i = Lc(n)) * $c(t)) /
                        (i * o * a)
                    )
                  : (n + r) / 2;
              })(e, r, o, a)),
              t.point(i, r),
              t.lineEnd(),
              t.lineStart(),
              t.point(u, r),
              (n = 0)),
            t.point((e = o), (r = a)),
            (i = u);
        },
        lineEnd: function () {
          t.lineEnd(), (e = r = NaN);
        },
        clean: function () {
          return 2 - n;
        },
      };
    },
    function (t, n, e, r) {
      var i;
      if (null == t)
        (i = e * qc),
          r.point(-Dc, i),
          r.point(0, i),
          r.point(Dc, i),
          r.point(Dc, 0),
          r.point(Dc, -i),
          r.point(0, -i),
          r.point(-Dc, -i),
          r.point(-Dc, 0),
          r.point(-Dc, i);
      else if (Uc(t[0] - n[0]) > Pc) {
        var o = t[0] < n[0] ? Dc : -Dc;
        (i = (e * o) / 2), r.point(-o, i), r.point(0, i), r.point(o, i);
      } else r.point(n[0], n[1]);
    },
    [-Dc, -qc]
  );
  function Hs(t) {
    var n = Lc(t),
      e = 6 * Ic,
      r = n > 0,
      i = Uc(n) > Pc;
    function o(t, e) {
      return Lc(t) * Lc(e) > n;
    }
    function a(t, e, r) {
      var i = [1, 0, 0],
        o = Rf(Df(t), Df(e)),
        a = qf(o, o),
        u = o[0],
        c = a - u * u;
      if (!c) return !r && t;
      var f = (n * a) / c,
        s = (-n * u) / c,
        l = Rf(i, o),
        h = Of(i, f);
      Ff(h, Of(o, s));
      var d = l,
        p = qf(h, d),
        g = qf(d, d),
        y = p * p - g * (qf(h, h) - 1);
      if (!(y < 0)) {
        var v = Zc(y),
          _ = Of(d, (-p - v) / g);
        if ((Ff(_, h), (_ = zf(_)), !r)) return _;
        var b,
          m = t[0],
          x = e[0],
          w = t[1],
          M = e[1];
        x < m && ((b = m), (m = x), (x = b));
        var A = x - m,
          T = Uc(A - Dc) < Pc;
        if (
          (!T && M < w && ((b = w), (w = M), (M = b)),
          T || A < Pc
            ? T
              ? (w + M > 0) ^ (_[1] < (Uc(_[0] - m) < Pc ? w : M))
              : w <= _[1] && _[1] <= M
            : (A > Dc) ^ (m <= _[0] && _[0] <= x))
        ) {
          var S = Of(d, (-p + v) / g);
          return Ff(S, h), [_, zf(S)];
        }
      }
    }
    function u(n, e) {
      var i = r ? t : Dc - t,
        o = 0;
      return (
        n < -i ? (o |= 1) : n > i && (o |= 2),
        e < -i ? (o |= 4) : e > i && (o |= 8),
        o
      );
    }
    return Bs(
      o,
      function (t) {
        var n, e, c, f, s;
        return {
          lineStart: function () {
            (f = c = !1), (s = 1);
          },
          point: function (l, h) {
            var d,
              p = [l, h],
              g = o(l, h),
              y = r ? (g ? 0 : u(l, h)) : g ? u(l + (l < 0 ? Dc : -Dc), h) : 0;
            if (
              (!n && (f = c = g) && t.lineStart(),
              g !== c && (!(d = a(n, p)) || qs(n, d) || qs(p, d)) && (p[2] = 1),
              g !== c)
            )
              (s = 0),
                g
                  ? (t.lineStart(), (d = a(p, n)), t.point(d[0], d[1]))
                  : ((d = a(n, p)), t.point(d[0], d[1], 2), t.lineEnd()),
                (n = d);
            else if (i && n && r ^ g) {
              var v;
              y & e ||
                !(v = a(p, n, !0)) ||
                ((s = 0),
                r
                  ? (t.lineStart(),
                    t.point(v[0][0], v[0][1]),
                    t.point(v[1][0], v[1][1]),
                    t.lineEnd())
                  : (t.point(v[1][0], v[1][1]),
                    t.lineEnd(),
                    t.lineStart(),
                    t.point(v[0][0], v[0][1], 3)));
            }
            !g || (n && qs(n, p)) || t.point(p[0], p[1]),
              (n = p),
              (c = g),
              (e = y);
          },
          lineEnd: function () {
            c && t.lineEnd(), (n = null);
          },
          clean: function () {
            return s | ((f && c) << 1);
          },
        };
      },
      function (n, r, i, o) {
        Ps(o, t, e, i, n, r);
      },
      r ? [0, -t] : [-Dc, t - Dc]
    );
  }
  var Xs,
    Gs,
    Vs,
    $s,
    Ws = 1e9,
    Zs = -Ws;
  function Ks(t, n, e, r) {
    function i(i, o) {
      return t <= i && i <= e && n <= o && o <= r;
    }
    function o(i, o, u, f) {
      var s = 0,
        l = 0;
      if (
        null == i ||
        (s = a(i, u)) !== (l = a(o, u)) ||
        (c(i, o) < 0) ^ (u > 0)
      )
        do {
          f.point(0 === s || 3 === s ? t : e, s > 1 ? r : n);
        } while ((s = (s + u + 4) % 4) !== l);
      else f.point(o[0], o[1]);
    }
    function a(r, i) {
      return Uc(r[0] - t) < Pc
        ? i > 0
          ? 0
          : 3
        : Uc(r[0] - e) < Pc
        ? i > 0
          ? 2
          : 1
        : Uc(r[1] - n) < Pc
        ? i > 0
          ? 1
          : 0
        : i > 0
        ? 3
        : 2;
    }
    function u(t, n) {
      return c(t.x, n.x);
    }
    function c(t, n) {
      var e = a(t, 1),
        r = a(n, 1);
      return e !== r
        ? e - r
        : 0 === e
        ? n[1] - t[1]
        : 1 === e
        ? t[0] - n[0]
        : 2 === e
        ? t[1] - n[1]
        : n[0] - t[0];
    }
    return function (a) {
      var c,
        f,
        s,
        l,
        h,
        d,
        p,
        g,
        y,
        v,
        _,
        b = a,
        m = Ds(),
        x = {
          point: w,
          lineStart: function () {
            (x.point = M), f && f.push((s = []));
            (v = !0), (y = !1), (p = g = NaN);
          },
          lineEnd: function () {
            c && (M(l, h), d && y && m.rejoin(), c.push(m.result()));
            (x.point = w), y && b.lineEnd();
          },
          polygonStart: function () {
            (b = m), (c = []), (f = []), (_ = !0);
          },
          polygonEnd: function () {
            var n = (function () {
                for (var n = 0, e = 0, i = f.length; e < i; ++e)
                  for (
                    var o,
                      a,
                      u = f[e],
                      c = 1,
                      s = u.length,
                      l = u[0],
                      h = l[0],
                      d = l[1];
                    c < s;
                    ++c
                  )
                    (o = h),
                      (a = d),
                      (h = (l = u[c])[0]),
                      (d = l[1]),
                      a <= r
                        ? d > r && (h - o) * (r - a) > (d - a) * (t - o) && ++n
                        : d <= r &&
                          (h - o) * (r - a) < (d - a) * (t - o) &&
                          --n;
                return n;
              })(),
              e = _ && n,
              i = (c = Z(c)).length;
            (e || i) &&
              (a.polygonStart(),
              e && (a.lineStart(), o(null, null, 1, a), a.lineEnd()),
              i && Fs(c, u, n, o, a),
              a.polygonEnd());
            (b = a), (c = f = s = null);
          },
        };
      function w(t, n) {
        i(t, n) && b.point(t, n);
      }
      function M(o, a) {
        var u = i(o, a);
        if ((f && s.push([o, a]), v))
          (l = o),
            (h = a),
            (d = u),
            (v = !1),
            u && (b.lineStart(), b.point(o, a));
        else if (u && y) b.point(o, a);
        else {
          var c = [
              (p = Math.max(Zs, Math.min(Ws, p))),
              (g = Math.max(Zs, Math.min(Ws, g))),
            ],
            m = [
              (o = Math.max(Zs, Math.min(Ws, o))),
              (a = Math.max(Zs, Math.min(Ws, a))),
            ];
          !(function (t, n, e, r, i, o) {
            var a,
              u = t[0],
              c = t[1],
              f = 0,
              s = 1,
              l = n[0] - u,
              h = n[1] - c;
            if (((a = e - u), l || !(a > 0))) {
              if (((a /= l), l < 0)) {
                if (a < f) return;
                a < s && (s = a);
              } else if (l > 0) {
                if (a > s) return;
                a > f && (f = a);
              }
              if (((a = i - u), l || !(a < 0))) {
                if (((a /= l), l < 0)) {
                  if (a > s) return;
                  a > f && (f = a);
                } else if (l > 0) {
                  if (a < f) return;
                  a < s && (s = a);
                }
                if (((a = r - c), h || !(a > 0))) {
                  if (((a /= h), h < 0)) {
                    if (a < f) return;
                    a < s && (s = a);
                  } else if (h > 0) {
                    if (a > s) return;
                    a > f && (f = a);
                  }
                  if (((a = o - c), h || !(a < 0))) {
                    if (((a /= h), h < 0)) {
                      if (a > s) return;
                      a > f && (f = a);
                    } else if (h > 0) {
                      if (a < f) return;
                      a < s && (s = a);
                    }
                    return (
                      f > 0 && ((t[0] = u + f * l), (t[1] = c + f * h)),
                      s < 1 && ((n[0] = u + s * l), (n[1] = c + s * h)),
                      !0
                    );
                  }
                }
              }
            }
          })(c, m, t, n, e, r)
            ? u && (b.lineStart(), b.point(o, a), (_ = !1))
            : (y || (b.lineStart(), b.point(c[0], c[1])),
              b.point(m[0], m[1]),
              u || b.lineEnd(),
              (_ = !1));
        }
        (p = o), (g = a), (y = u);
      }
      return x;
    };
  }
  var Qs = {
    sphere: nf,
    point: nf,
    lineStart: function () {
      (Qs.point = tl), (Qs.lineEnd = Js);
    },
    lineEnd: nf,
    polygonStart: nf,
    polygonEnd: nf,
  };
  function Js() {
    Qs.point = Qs.lineEnd = nf;
  }
  function tl(t, n) {
    (Gs = t *= Ic), (Vs = $c((n *= Ic))), ($s = Lc(n)), (Qs.point = nl);
  }
  function nl(t, n) {
    t *= Ic;
    var e = $c((n *= Ic)),
      r = Lc(n),
      i = Uc(t - Gs),
      o = Lc(i),
      a = r * $c(i),
      u = $s * e - Vs * r * o,
      c = Vs * e + $s * r * o;
    Xs.add(Yc(Zc(a * a + u * u), c)), (Gs = t), (Vs = e), ($s = r);
  }
  function el(t) {
    return (Xs = new g()), cf(t, Qs), +Xs;
  }
  var rl = [null, null],
    il = { type: "LineString", coordinates: rl };
  function ol(t, n) {
    return (rl[0] = t), (rl[1] = n), el(il);
  }
  var al = {
      Feature: function (t, n) {
        return cl(t.geometry, n);
      },
      FeatureCollection: function (t, n) {
        for (var e = t.features, r = -1, i = e.length; ++r < i; )
          if (cl(e[r].geometry, n)) return !0;
        return !1;
      },
    },
    ul = {
      Sphere: function () {
        return !0;
      },
      Point: function (t, n) {
        return fl(t.coordinates, n);
      },
      MultiPoint: function (t, n) {
        for (var e = t.coordinates, r = -1, i = e.length; ++r < i; )
          if (fl(e[r], n)) return !0;
        return !1;
      },
      LineString: function (t, n) {
        return sl(t.coordinates, n);
      },
      MultiLineString: function (t, n) {
        for (var e = t.coordinates, r = -1, i = e.length; ++r < i; )
          if (sl(e[r], n)) return !0;
        return !1;
      },
      Polygon: function (t, n) {
        return ll(t.coordinates, n);
      },
      MultiPolygon: function (t, n) {
        for (var e = t.coordinates, r = -1, i = e.length; ++r < i; )
          if (ll(e[r], n)) return !0;
        return !1;
      },
      GeometryCollection: function (t, n) {
        for (var e = t.geometries, r = -1, i = e.length; ++r < i; )
          if (cl(e[r], n)) return !0;
        return !1;
      },
    };
  function cl(t, n) {
    return !(!t || !ul.hasOwnProperty(t.type)) && ul[t.type](t, n);
  }
  function fl(t, n) {
    return 0 === ol(t, n);
  }
  function sl(t, n) {
    for (var e, r, i, o = 0, a = t.length; o < a; o++) {
      if (0 === (r = ol(t[o], n))) return !0;
      if (
        o > 0 &&
        (i = ol(t[o], t[o - 1])) > 0 &&
        e <= i &&
        r <= i &&
        (e + r - i) * (1 - Math.pow((e - r) / i, 2)) < zc * i
      )
        return !0;
      e = r;
    }
    return !1;
  }
  function ll(t, n) {
    return !!Us(t.map(hl), dl(n));
  }
  function hl(t) {
    return (t = t.map(dl)).pop(), t;
  }
  function dl(t) {
    return [t[0] * Ic, t[1] * Ic];
  }
  function pl(t, n, e) {
    var r = J(t, n - Pc, e).concat(n);
    return function (t) {
      return r.map(function (n) {
        return [t, n];
      });
    };
  }
  function gl(t, n, e) {
    var r = J(t, n - Pc, e).concat(n);
    return function (t) {
      return r.map(function (n) {
        return [n, t];
      });
    };
  }
  function yl() {
    var t,
      n,
      e,
      r,
      i,
      o,
      a,
      u,
      c,
      f,
      s,
      l,
      h = 10,
      d = h,
      p = 90,
      g = 360,
      y = 2.5;
    function v() {
      return { type: "MultiLineString", coordinates: _() };
    }
    function _() {
      return J(jc(r / p) * p, e, p)
        .map(s)
        .concat(J(jc(u / g) * g, a, g).map(l))
        .concat(
          J(jc(n / h) * h, t, h)
            .filter(function (t) {
              return Uc(t % p) > Pc;
            })
            .map(c)
        )
        .concat(
          J(jc(o / d) * d, i, d)
            .filter(function (t) {
              return Uc(t % g) > Pc;
            })
            .map(f)
        );
    }
    return (
      (v.lines = function () {
        return _().map(function (t) {
          return { type: "LineString", coordinates: t };
        });
      }),
      (v.outline = function () {
        return {
          type: "Polygon",
          coordinates: [
            s(r).concat(
              l(a).slice(1),
              s(e).reverse().slice(1),
              l(u).reverse().slice(1)
            ),
          ],
        };
      }),
      (v.extent = function (t) {
        return arguments.length
          ? v.extentMajor(t).extentMinor(t)
          : v.extentMinor();
      }),
      (v.extentMajor = function (t) {
        return arguments.length
          ? ((r = +t[0][0]),
            (e = +t[1][0]),
            (u = +t[0][1]),
            (a = +t[1][1]),
            r > e && ((t = r), (r = e), (e = t)),
            u > a && ((t = u), (u = a), (a = t)),
            v.precision(y))
          : [
              [r, u],
              [e, a],
            ];
      }),
      (v.extentMinor = function (e) {
        return arguments.length
          ? ((n = +e[0][0]),
            (t = +e[1][0]),
            (o = +e[0][1]),
            (i = +e[1][1]),
            n > t && ((e = n), (n = t), (t = e)),
            o > i && ((e = o), (o = i), (i = e)),
            v.precision(y))
          : [
              [n, o],
              [t, i],
            ];
      }),
      (v.step = function (t) {
        return arguments.length ? v.stepMajor(t).stepMinor(t) : v.stepMinor();
      }),
      (v.stepMajor = function (t) {
        return arguments.length ? ((p = +t[0]), (g = +t[1]), v) : [p, g];
      }),
      (v.stepMinor = function (t) {
        return arguments.length ? ((h = +t[0]), (d = +t[1]), v) : [h, d];
      }),
      (v.precision = function (h) {
        return arguments.length
          ? ((y = +h),
            (c = pl(o, i, 90)),
            (f = gl(n, t, y)),
            (s = pl(u, a, 90)),
            (l = gl(r, e, y)),
            v)
          : y;
      }),
      v
        .extentMajor([
          [-180, -89.999999],
          [180, 89.999999],
        ])
        .extentMinor([
          [-180, -80.000001],
          [180, 80.000001],
        ])
    );
  }
  var vl,
    _l,
    bl,
    ml,
    xl = (t) => t,
    wl = new g(),
    Ml = new g(),
    Al = {
      point: nf,
      lineStart: nf,
      lineEnd: nf,
      polygonStart: function () {
        (Al.lineStart = Tl), (Al.lineEnd = kl);
      },
      polygonEnd: function () {
        (Al.lineStart = Al.lineEnd = Al.point = nf),
          wl.add(Uc(Ml)),
          (Ml = new g());
      },
      result: function () {
        var t = wl / 2;
        return (wl = new g()), t;
      },
    };
  function Tl() {
    Al.point = Sl;
  }
  function Sl(t, n) {
    (Al.point = El), (vl = bl = t), (_l = ml = n);
  }
  function El(t, n) {
    Ml.add(ml * t - bl * n), (bl = t), (ml = n);
  }
  function kl() {
    El(vl, _l);
  }
  var Nl = 1 / 0,
    Cl = Nl,
    Pl = -Nl,
    zl = Pl,
    Dl = {
      point: function (t, n) {
        t < Nl && (Nl = t);
        t > Pl && (Pl = t);
        n < Cl && (Cl = n);
        n > zl && (zl = n);
      },
      lineStart: nf,
      lineEnd: nf,
      polygonStart: nf,
      polygonEnd: nf,
      result: function () {
        var t = [
          [Nl, Cl],
          [Pl, zl],
        ];
        return (Pl = zl = -(Cl = Nl = 1 / 0)), t;
      },
    };
  var ql,
    Rl,
    Fl,
    Ol,
    Il = 0,
    Ul = 0,
    Bl = 0,
    Yl = 0,
    Ll = 0,
    jl = 0,
    Hl = 0,
    Xl = 0,
    Gl = 0,
    Vl = {
      point: $l,
      lineStart: Wl,
      lineEnd: Ql,
      polygonStart: function () {
        (Vl.lineStart = Jl), (Vl.lineEnd = th);
      },
      polygonEnd: function () {
        (Vl.point = $l), (Vl.lineStart = Wl), (Vl.lineEnd = Ql);
      },
      result: function () {
        var t = Gl
          ? [Hl / Gl, Xl / Gl]
          : jl
          ? [Yl / jl, Ll / jl]
          : Bl
          ? [Il / Bl, Ul / Bl]
          : [NaN, NaN];
        return (Il = Ul = Bl = Yl = Ll = jl = Hl = Xl = Gl = 0), t;
      },
    };
  function $l(t, n) {
    (Il += t), (Ul += n), ++Bl;
  }
  function Wl() {
    Vl.point = Zl;
  }
  function Zl(t, n) {
    (Vl.point = Kl), $l((Fl = t), (Ol = n));
  }
  function Kl(t, n) {
    var e = t - Fl,
      r = n - Ol,
      i = Zc(e * e + r * r);
    (Yl += (i * (Fl + t)) / 2),
      (Ll += (i * (Ol + n)) / 2),
      (jl += i),
      $l((Fl = t), (Ol = n));
  }
  function Ql() {
    Vl.point = $l;
  }
  function Jl() {
    Vl.point = nh;
  }
  function th() {
    eh(ql, Rl);
  }
  function nh(t, n) {
    (Vl.point = eh), $l((ql = Fl = t), (Rl = Ol = n));
  }
  function eh(t, n) {
    var e = t - Fl,
      r = n - Ol,
      i = Zc(e * e + r * r);
    (Yl += (i * (Fl + t)) / 2),
      (Ll += (i * (Ol + n)) / 2),
      (jl += i),
      (Hl += (i = Ol * t - Fl * n) * (Fl + t)),
      (Xl += i * (Ol + n)),
      (Gl += 3 * i),
      $l((Fl = t), (Ol = n));
  }
  function rh(t) {
    this._context = t;
  }
  rh.prototype = {
    _radius: 4.5,
    pointRadius: function (t) {
      return (this._radius = t), this;
    },
    polygonStart: function () {
      this._line = 0;
    },
    polygonEnd: function () {
      this._line = NaN;
    },
    lineStart: function () {
      this._point = 0;
    },
    lineEnd: function () {
      0 === this._line && this._context.closePath(), (this._point = NaN);
    },
    point: function (t, n) {
      switch (this._point) {
        case 0:
          this._context.moveTo(t, n), (this._point = 1);
          break;
        case 1:
          this._context.lineTo(t, n);
          break;
        default:
          this._context.moveTo(t + this._radius, n),
            this._context.arc(t, n, this._radius, 0, Fc);
      }
    },
    result: nf,
  };
  var ih,
    oh,
    ah,
    uh,
    ch,
    fh = new g(),
    sh = {
      point: nf,
      lineStart: function () {
        sh.point = lh;
      },
      lineEnd: function () {
        ih && hh(oh, ah), (sh.point = nf);
      },
      polygonStart: function () {
        ih = !0;
      },
      polygonEnd: function () {
        ih = null;
      },
      result: function () {
        var t = +fh;
        return (fh = new g()), t;
      },
    };
  function lh(t, n) {
    (sh.point = hh), (oh = uh = t), (ah = ch = n);
  }
  function hh(t, n) {
    (uh -= t), (ch -= n), fh.add(Zc(uh * uh + ch * ch)), (uh = t), (ch = n);
  }
  function dh() {
    this._string = [];
  }
  function ph(t) {
    return (
      "m0," +
      t +
      "a" +
      t +
      "," +
      t +
      " 0 1,1 0," +
      -2 * t +
      "a" +
      t +
      "," +
      t +
      " 0 1,1 0," +
      2 * t +
      "z"
    );
  }
  function gh(t) {
    return function (n) {
      var e = new yh();
      for (var r in t) e[r] = t[r];
      return (e.stream = n), e;
    };
  }
  function yh() {}
  function vh(t, n, e) {
    var r = t.clipExtent && t.clipExtent();
    return (
      t.scale(150).translate([0, 0]),
      null != r && t.clipExtent(null),
      cf(e, t.stream(Dl)),
      n(Dl.result()),
      null != r && t.clipExtent(r),
      t
    );
  }
  function _h(t, n, e) {
    return vh(
      t,
      function (e) {
        var r = n[1][0] - n[0][0],
          i = n[1][1] - n[0][1],
          o = Math.min(r / (e[1][0] - e[0][0]), i / (e[1][1] - e[0][1])),
          a = +n[0][0] + (r - o * (e[1][0] + e[0][0])) / 2,
          u = +n[0][1] + (i - o * (e[1][1] + e[0][1])) / 2;
        t.scale(150 * o).translate([a, u]);
      },
      e
    );
  }
  function bh(t, n, e) {
    return _h(t, [[0, 0], n], e);
  }
  function mh(t, n, e) {
    return vh(
      t,
      function (e) {
        var r = +n,
          i = r / (e[1][0] - e[0][0]),
          o = (r - i * (e[1][0] + e[0][0])) / 2,
          a = -i * e[0][1];
        t.scale(150 * i).translate([o, a]);
      },
      e
    );
  }
  function xh(t, n, e) {
    return vh(
      t,
      function (e) {
        var r = +n,
          i = r / (e[1][1] - e[0][1]),
          o = -i * e[0][0],
          a = (r - i * (e[1][1] + e[0][1])) / 2;
        t.scale(150 * i).translate([o, a]);
      },
      e
    );
  }
  (dh.prototype = {
    _radius: 4.5,
    _circle: ph(4.5),
    pointRadius: function (t) {
      return (
        (t = +t) !== this._radius &&
          ((this._radius = t), (this._circle = null)),
        this
      );
    },
    polygonStart: function () {
      this._line = 0;
    },
    polygonEnd: function () {
      this._line = NaN;
    },
    lineStart: function () {
      this._point = 0;
    },
    lineEnd: function () {
      0 === this._line && this._string.push("Z"), (this._point = NaN);
    },
    point: function (t, n) {
      switch (this._point) {
        case 0:
          this._string.push("M", t, ",", n), (this._point = 1);
          break;
        case 1:
          this._string.push("L", t, ",", n);
          break;
        default:
          null == this._circle && (this._circle = ph(this._radius)),
            this._string.push("M", t, ",", n, this._circle);
      }
    },
    result: function () {
      if (this._string.length) {
        var t = this._string.join("");
        return (this._string = []), t;
      }
      return null;
    },
  }),
    (yh.prototype = {
      constructor: yh,
      point: function (t, n) {
        this.stream.point(t, n);
      },
      sphere: function () {
        this.stream.sphere();
      },
      lineStart: function () {
        this.stream.lineStart();
      },
      lineEnd: function () {
        this.stream.lineEnd();
      },
      polygonStart: function () {
        this.stream.polygonStart();
      },
      polygonEnd: function () {
        this.stream.polygonEnd();
      },
    });
  var wh = Lc(30 * Ic);
  function Mh(t, n) {
    return +n
      ? (function (t, n) {
          function e(r, i, o, a, u, c, f, s, l, h, d, p, g, y) {
            var v = f - r,
              _ = s - i,
              b = v * v + _ * _;
            if (b > 4 * n && g--) {
              var m = a + h,
                x = u + d,
                w = c + p,
                M = Zc(m * m + x * x + w * w),
                A = Jc((w /= M)),
                T =
                  Uc(Uc(w) - 1) < Pc || Uc(o - l) < Pc ? (o + l) / 2 : Yc(x, m),
                S = t(T, A),
                E = S[0],
                k = S[1],
                N = E - r,
                C = k - i,
                P = _ * N - v * C;
              ((P * P) / b > n ||
                Uc((v * N + _ * C) / b - 0.5) > 0.3 ||
                a * h + u * d + c * p < wh) &&
                (e(r, i, o, a, u, c, E, k, T, (m /= M), (x /= M), w, g, y),
                y.point(E, k),
                e(E, k, T, m, x, w, f, s, l, h, d, p, g, y));
            }
          }
          return function (n) {
            var r,
              i,
              o,
              a,
              u,
              c,
              f,
              s,
              l,
              h,
              d,
              p,
              g = {
                point: y,
                lineStart: v,
                lineEnd: b,
                polygonStart: function () {
                  n.polygonStart(), (g.lineStart = m);
                },
                polygonEnd: function () {
                  n.polygonEnd(), (g.lineStart = v);
                },
              };
            function y(e, r) {
              (e = t(e, r)), n.point(e[0], e[1]);
            }
            function v() {
              (s = NaN), (g.point = _), n.lineStart();
            }
            function _(r, i) {
              var o = Df([r, i]),
                a = t(r, i);
              e(
                s,
                l,
                f,
                h,
                d,
                p,
                (s = a[0]),
                (l = a[1]),
                (f = r),
                (h = o[0]),
                (d = o[1]),
                (p = o[2]),
                16,
                n
              ),
                n.point(s, l);
            }
            function b() {
              (g.point = y), n.lineEnd();
            }
            function m() {
              v(), (g.point = x), (g.lineEnd = w);
            }
            function x(t, n) {
              _((r = t), n),
                (i = s),
                (o = l),
                (a = h),
                (u = d),
                (c = p),
                (g.point = _);
            }
            function w() {
              e(s, l, f, h, d, p, i, o, r, a, u, c, 16, n),
                (g.lineEnd = b),
                b();
            }
            return g;
          };
        })(t, n)
      : (function (t) {
          return gh({
            point: function (n, e) {
              (n = t(n, e)), this.stream.point(n[0], n[1]);
            },
          });
        })(t);
  }
  var Ah = gh({
    point: function (t, n) {
      this.stream.point(t * Ic, n * Ic);
    },
  });
  function Th(t, n, e, r, i, o) {
    if (!o)
      return (function (t, n, e, r, i) {
        function o(o, a) {
          return [n + t * (o *= r), e - t * (a *= i)];
        }
        return (
          (o.invert = function (o, a) {
            return [((o - n) / t) * r, ((e - a) / t) * i];
          }),
          o
        );
      })(t, n, e, r, i);
    var a = Lc(o),
      u = $c(o),
      c = a * t,
      f = u * t,
      s = a / t,
      l = u / t,
      h = (u * e - a * n) / t,
      d = (u * n + a * e) / t;
    function p(t, o) {
      return [c * (t *= r) - f * (o *= i) + n, e - f * t - c * o];
    }
    return (
      (p.invert = function (t, n) {
        return [r * (s * t - l * n + h), i * (d - l * t - s * n)];
      }),
      p
    );
  }
  function Sh(t) {
    return Eh(function () {
      return t;
    })();
  }
  function Eh(t) {
    var n,
      e,
      r,
      i,
      o,
      a,
      u,
      c,
      f,
      s,
      l = 150,
      h = 480,
      d = 250,
      p = 0,
      g = 0,
      y = 0,
      v = 0,
      _ = 0,
      b = 0,
      m = 1,
      x = 1,
      w = null,
      M = js,
      A = null,
      T = xl,
      S = 0.5;
    function E(t) {
      return c(t[0] * Ic, t[1] * Ic);
    }
    function k(t) {
      return (t = c.invert(t[0], t[1])) && [t[0] * Oc, t[1] * Oc];
    }
    function N() {
      var t = Th(l, 0, 0, m, x, b).apply(null, n(p, g)),
        r = Th(l, h - t[0], d - t[1], m, x, b);
      return (
        (e = Ss(y, v, _)), (u = As(n, r)), (c = As(e, u)), (a = Mh(u, S)), C()
      );
    }
    function C() {
      return (f = s = null), E;
    }
    return (
      (E.stream = function (t) {
        return f && s === t
          ? f
          : (f = Ah(
              (function (t) {
                return gh({
                  point: function (n, e) {
                    var r = t(n, e);
                    return this.stream.point(r[0], r[1]);
                  },
                });
              })(e)(M(a(T((s = t)))))
            ));
      }),
      (E.preclip = function (t) {
        return arguments.length ? ((M = t), (w = void 0), C()) : M;
      }),
      (E.postclip = function (t) {
        return arguments.length ? ((T = t), (A = r = i = o = null), C()) : T;
      }),
      (E.clipAngle = function (t) {
        return arguments.length
          ? ((M = +t ? Hs((w = t * Ic)) : ((w = null), js)), C())
          : w * Oc;
      }),
      (E.clipExtent = function (t) {
        return arguments.length
          ? ((T =
              null == t
                ? ((A = r = i = o = null), xl)
                : Ks(
                    (A = +t[0][0]),
                    (r = +t[0][1]),
                    (i = +t[1][0]),
                    (o = +t[1][1])
                  )),
            C())
          : null == A
          ? null
          : [
              [A, r],
              [i, o],
            ];
      }),
      (E.scale = function (t) {
        return arguments.length ? ((l = +t), N()) : l;
      }),
      (E.translate = function (t) {
        return arguments.length ? ((h = +t[0]), (d = +t[1]), N()) : [h, d];
      }),
      (E.center = function (t) {
        return arguments.length
          ? ((p = (t[0] % 360) * Ic), (g = (t[1] % 360) * Ic), N())
          : [p * Oc, g * Oc];
      }),
      (E.rotate = function (t) {
        return arguments.length
          ? ((y = (t[0] % 360) * Ic),
            (v = (t[1] % 360) * Ic),
            (_ = t.length > 2 ? (t[2] % 360) * Ic : 0),
            N())
          : [y * Oc, v * Oc, _ * Oc];
      }),
      (E.angle = function (t) {
        return arguments.length ? ((b = (t % 360) * Ic), N()) : b * Oc;
      }),
      (E.reflectX = function (t) {
        return arguments.length ? ((m = t ? -1 : 1), N()) : m < 0;
      }),
      (E.reflectY = function (t) {
        return arguments.length ? ((x = t ? -1 : 1), N()) : x < 0;
      }),
      (E.precision = function (t) {
        return arguments.length ? ((a = Mh(u, (S = t * t))), C()) : Zc(S);
      }),
      (E.fitExtent = function (t, n) {
        return _h(E, t, n);
      }),
      (E.fitSize = function (t, n) {
        return bh(E, t, n);
      }),
      (E.fitWidth = function (t, n) {
        return mh(E, t, n);
      }),
      (E.fitHeight = function (t, n) {
        return xh(E, t, n);
      }),
      function () {
        return (n = t.apply(this, arguments)), (E.invert = n.invert && k), N();
      }
    );
  }
  function kh(t) {
    var n = 0,
      e = Dc / 3,
      r = Eh(t),
      i = r(n, e);
    return (
      (i.parallels = function (t) {
        return arguments.length
          ? r((n = t[0] * Ic), (e = t[1] * Ic))
          : [n * Oc, e * Oc];
      }),
      i
    );
  }
  function Nh(t, n) {
    var e = $c(t),
      r = (e + $c(n)) / 2;
    if (Uc(r) < Pc)
      return (function (t) {
        var n = Lc(t);
        function e(t, e) {
          return [t * n, $c(e) / n];
        }
        return (
          (e.invert = function (t, e) {
            return [t / n, Jc(e * n)];
          }),
          e
        );
      })(t);
    var i = 1 + e * (2 * r - e),
      o = Zc(i) / r;
    function a(t, n) {
      var e = Zc(i - 2 * r * $c(n)) / r;
      return [e * $c((t *= r)), o - e * Lc(t)];
    }
    return (
      (a.invert = function (t, n) {
        var e = o - n,
          a = Yc(t, Uc(e)) * Wc(e);
        return (
          e * r < 0 && (a -= Dc * Wc(t) * Wc(e)),
          [a / r, Jc((i - (t * t + e * e) * r * r) / (2 * r))]
        );
      }),
      a
    );
  }
  function Ch() {
    return kh(Nh).scale(155.424).center([0, 33.6442]);
  }
  function Ph() {
    return Ch()
      .parallels([29.5, 45.5])
      .scale(1070)
      .translate([480, 250])
      .rotate([96, 0])
      .center([-0.6, 38.7]);
  }
  function zh(t) {
    return function (n, e) {
      var r = Lc(n),
        i = Lc(e),
        o = t(r * i);
      return o === 1 / 0 ? [2, 0] : [o * i * $c(n), o * $c(e)];
    };
  }
  function Dh(t) {
    return function (n, e) {
      var r = Zc(n * n + e * e),
        i = t(r),
        o = $c(i),
        a = Lc(i);
      return [Yc(n * o, r * a), Jc(r && (e * o) / r)];
    };
  }
  var qh = zh(function (t) {
    return Zc(2 / (1 + t));
  });
  qh.invert = Dh(function (t) {
    return 2 * Jc(t / 2);
  });
  var Rh = zh(function (t) {
    return (t = Qc(t)) && t / $c(t);
  });
  function Fh(t, n) {
    return [t, Gc(Kc((qc + n) / 2))];
  }
  function Oh(t) {
    var n,
      e,
      r,
      i = Sh(t),
      o = i.center,
      a = i.scale,
      u = i.translate,
      c = i.clipExtent,
      f = null;
    function s() {
      var o = Dc * a(),
        u = i(Cs(i.rotate()).invert([0, 0]));
      return c(
        null == f
          ? [
              [u[0] - o, u[1] - o],
              [u[0] + o, u[1] + o],
            ]
          : t === Fh
          ? [
              [Math.max(u[0] - o, f), n],
              [Math.min(u[0] + o, e), r],
            ]
          : [
              [f, Math.max(u[1] - o, n)],
              [e, Math.min(u[1] + o, r)],
            ]
      );
    }
    return (
      (i.scale = function (t) {
        return arguments.length ? (a(t), s()) : a();
      }),
      (i.translate = function (t) {
        return arguments.length ? (u(t), s()) : u();
      }),
      (i.center = function (t) {
        return arguments.length ? (o(t), s()) : o();
      }),
      (i.clipExtent = function (t) {
        return arguments.length
          ? (null == t
              ? (f = n = e = r = null)
              : ((f = +t[0][0]),
                (n = +t[0][1]),
                (e = +t[1][0]),
                (r = +t[1][1])),
            s())
          : null == f
          ? null
          : [
              [f, n],
              [e, r],
            ];
      }),
      s()
    );
  }
  function Ih(t) {
    return Kc((qc + t) / 2);
  }
  function Uh(t, n) {
    var e = Lc(t),
      r = t === n ? $c(t) : Gc(e / Lc(n)) / Gc(Ih(n) / Ih(t)),
      i = (e * Vc(Ih(t), r)) / r;
    if (!r) return Fh;
    function o(t, n) {
      i > 0 ? n < -qc + Pc && (n = -qc + Pc) : n > qc - Pc && (n = qc - Pc);
      var e = i / Vc(Ih(n), r);
      return [e * $c(r * t), i - e * Lc(r * t)];
    }
    return (
      (o.invert = function (t, n) {
        var e = i - n,
          o = Wc(r) * Zc(t * t + e * e),
          a = Yc(t, Uc(e)) * Wc(e);
        return (
          e * r < 0 && (a -= Dc * Wc(t) * Wc(e)),
          [a / r, 2 * Bc(Vc(i / o, 1 / r)) - qc]
        );
      }),
      o
    );
  }
  function Bh(t, n) {
    return [t, n];
  }
  function Yh(t, n) {
    var e = Lc(t),
      r = t === n ? $c(t) : (e - Lc(n)) / (n - t),
      i = e / r + t;
    if (Uc(r) < Pc) return Bh;
    function o(t, n) {
      var e = i - n,
        o = r * t;
      return [e * $c(o), i - e * Lc(o)];
    }
    return (
      (o.invert = function (t, n) {
        var e = i - n,
          o = Yc(t, Uc(e)) * Wc(e);
        return (
          e * r < 0 && (o -= Dc * Wc(t) * Wc(e)),
          [o / r, i - Wc(r) * Zc(t * t + e * e)]
        );
      }),
      o
    );
  }
  (Rh.invert = Dh(function (t) {
    return t;
  })),
    (Fh.invert = function (t, n) {
      return [t, 2 * Bc(Hc(n)) - qc];
    }),
    (Bh.invert = Bh);
  var Lh = 1.340264,
    jh = -0.081106,
    Hh = 893e-6,
    Xh = 0.003796,
    Gh = Zc(3) / 2;
  function Vh(t, n) {
    var e = Jc(Gh * $c(n)),
      r = e * e,
      i = r * r * r;
    return [
      (t * Lc(e)) / (Gh * (Lh + 3 * jh * r + i * (7 * Hh + 9 * Xh * r))),
      e * (Lh + jh * r + i * (Hh + Xh * r)),
    ];
  }
  function $h(t, n) {
    var e = Lc(n),
      r = Lc(t) * e;
    return [(e * $c(t)) / r, $c(n) / r];
  }
  function Wh(t, n) {
    var e = n * n,
      r = e * e;
    return [
      t *
        (0.8707 -
          0.131979 * e +
          r * (r * (0.003971 * e - 0.001529 * r) - 0.013791)),
      n *
        (1.007226 +
          e * (0.015085 + r * (0.028874 * e - 0.044475 - 0.005916 * r))),
    ];
  }
  function Zh(t, n) {
    return [Lc(n) * $c(t), $c(n)];
  }
  function Kh(t, n) {
    var e = Lc(n),
      r = 1 + Lc(t) * e;
    return [(e * $c(t)) / r, $c(n) / r];
  }
  function Qh(t, n) {
    return [Gc(Kc((qc + n) / 2)), -t];
  }
  function Jh(t, n) {
    return t.parent === n.parent ? 1 : 2;
  }
  function td(t, n) {
    return t + n.x;
  }
  function nd(t, n) {
    return Math.max(t, n.y);
  }
  function ed(t) {
    var n = 0,
      e = t.children,
      r = e && e.length;
    if (r) for (; --r >= 0; ) n += e[r].value;
    else n = 1;
    t.value = n;
  }
  function rd(t, n) {
    t instanceof Map
      ? ((t = [void 0, t]), void 0 === n && (n = od))
      : void 0 === n && (n = id);
    for (var e, r, i, o, a, u = new cd(t), c = [u]; (e = c.pop()); )
      if ((i = n(e.data)) && (a = (i = Array.from(i)).length))
        for (e.children = i, o = a - 1; o >= 0; --o)
          c.push((r = i[o] = new cd(i[o]))),
            (r.parent = e),
            (r.depth = e.depth + 1);
    return u.eachBefore(ud);
  }
  function id(t) {
    return t.children;
  }
  function od(t) {
    return Array.isArray(t) ? t[1] : null;
  }
  function ad(t) {
    void 0 !== t.data.value && (t.value = t.data.value), (t.data = t.data.data);
  }
  function ud(t) {
    var n = 0;
    do {
      t.height = n;
    } while ((t = t.parent) && t.height < ++n);
  }
  function cd(t) {
    (this.data = t), (this.depth = this.height = 0), (this.parent = null);
  }
  function fd(t) {
    for (
      var n,
        e,
        r = 0,
        i = (t = (function (t) {
          for (var n, e, r = t.length; r; )
            (e = (Math.random() * r--) | 0),
              (n = t[r]),
              (t[r] = t[e]),
              (t[e] = n);
          return t;
        })(Array.from(t))).length,
        o = [];
      r < i;

    )
      (n = t[r]), e && hd(e, n) ? ++r : ((e = pd((o = sd(o, n)))), (r = 0));
    return e;
  }
  function sd(t, n) {
    var e, r;
    if (dd(n, t)) return [n];
    for (e = 0; e < t.length; ++e)
      if (ld(n, t[e]) && dd(gd(t[e], n), t)) return [t[e], n];
    for (e = 0; e < t.length - 1; ++e)
      for (r = e + 1; r < t.length; ++r)
        if (
          ld(gd(t[e], t[r]), n) &&
          ld(gd(t[e], n), t[r]) &&
          ld(gd(t[r], n), t[e]) &&
          dd(yd(t[e], t[r], n), t)
        )
          return [t[e], t[r], n];
    throw new Error();
  }
  function ld(t, n) {
    var e = t.r - n.r,
      r = n.x - t.x,
      i = n.y - t.y;
    return e < 0 || e * e < r * r + i * i;
  }
  function hd(t, n) {
    var e = t.r - n.r + 1e-9 * Math.max(t.r, n.r, 1),
      r = n.x - t.x,
      i = n.y - t.y;
    return e > 0 && e * e > r * r + i * i;
  }
  function dd(t, n) {
    for (var e = 0; e < n.length; ++e) if (!hd(t, n[e])) return !1;
    return !0;
  }
  function pd(t) {
    switch (t.length) {
      case 1:
        return (function (t) {
          return { x: t.x, y: t.y, r: t.r };
        })(t[0]);
      case 2:
        return gd(t[0], t[1]);
      case 3:
        return yd(t[0], t[1], t[2]);
    }
  }
  function gd(t, n) {
    var e = t.x,
      r = t.y,
      i = t.r,
      o = n.x,
      a = n.y,
      u = n.r,
      c = o - e,
      f = a - r,
      s = u - i,
      l = Math.sqrt(c * c + f * f);
    return {
      x: (e + o + (c / l) * s) / 2,
      y: (r + a + (f / l) * s) / 2,
      r: (l + i + u) / 2,
    };
  }
  function yd(t, n, e) {
    var r = t.x,
      i = t.y,
      o = t.r,
      a = n.x,
      u = n.y,
      c = n.r,
      f = e.x,
      s = e.y,
      l = e.r,
      h = r - a,
      d = r - f,
      p = i - u,
      g = i - s,
      y = c - o,
      v = l - o,
      _ = r * r + i * i - o * o,
      b = _ - a * a - u * u + c * c,
      m = _ - f * f - s * s + l * l,
      x = d * p - h * g,
      w = (p * m - g * b) / (2 * x) - r,
      M = (g * y - p * v) / x,
      A = (d * b - h * m) / (2 * x) - i,
      T = (h * v - d * y) / x,
      S = M * M + T * T - 1,
      E = 2 * (o + w * M + A * T),
      k = w * w + A * A - o * o,
      N = -(S ? (E + Math.sqrt(E * E - 4 * S * k)) / (2 * S) : k / E);
    return { x: r + w + M * N, y: i + A + T * N, r: N };
  }
  function vd(t, n, e) {
    var r,
      i,
      o,
      a,
      u = t.x - n.x,
      c = t.y - n.y,
      f = u * u + c * c;
    f
      ? ((i = n.r + e.r),
        (i *= i),
        (a = t.r + e.r),
        i > (a *= a)
          ? ((r = (f + a - i) / (2 * f)),
            (o = Math.sqrt(Math.max(0, a / f - r * r))),
            (e.x = t.x - r * u - o * c),
            (e.y = t.y - r * c + o * u))
          : ((r = (f + i - a) / (2 * f)),
            (o = Math.sqrt(Math.max(0, i / f - r * r))),
            (e.x = n.x + r * u - o * c),
            (e.y = n.y + r * c + o * u)))
      : ((e.x = n.x + e.r), (e.y = n.y));
  }
  function _d(t, n) {
    var e = t.r + n.r - 1e-6,
      r = n.x - t.x,
      i = n.y - t.y;
    return e > 0 && e * e > r * r + i * i;
  }
  function bd(t) {
    var n = t._,
      e = t.next._,
      r = n.r + e.r,
      i = (n.x * e.r + e.x * n.r) / r,
      o = (n.y * e.r + e.y * n.r) / r;
    return i * i + o * o;
  }
  function md(t) {
    (this._ = t), (this.next = null), (this.previous = null);
  }
  function xd(t) {
    if (
      !(i = (t = (function (t) {
        return "object" == typeof t && "length" in t ? t : Array.from(t);
      })(t)).length)
    )
      return 0;
    var n, e, r, i, o, a, u, c, f, s, l;
    if ((((n = t[0]).x = 0), (n.y = 0), !(i > 1))) return n.r;
    if (((e = t[1]), (n.x = -e.r), (e.x = n.r), (e.y = 0), !(i > 2)))
      return n.r + e.r;
    vd(e, n, (r = t[2])),
      (n = new md(n)),
      (e = new md(e)),
      (r = new md(r)),
      (n.next = r.previous = e),
      (e.next = n.previous = r),
      (r.next = e.previous = n);
    t: for (u = 3; u < i; ++u) {
      vd(n._, e._, (r = t[u])),
        (r = new md(r)),
        (c = e.next),
        (f = n.previous),
        (s = e._.r),
        (l = n._.r);
      do {
        if (s <= l) {
          if (_d(c._, r._)) {
            (e = c), (n.next = e), (e.previous = n), --u;
            continue t;
          }
          (s += c._.r), (c = c.next);
        } else {
          if (_d(f._, r._)) {
            ((n = f).next = e), (e.previous = n), --u;
            continue t;
          }
          (l += f._.r), (f = f.previous);
        }
      } while (c !== f.next);
      for (
        r.previous = n, r.next = e, n.next = e.previous = e = r, o = bd(n);
        (r = r.next) !== e;

      )
        (a = bd(r)) < o && ((n = r), (o = a));
      e = n.next;
    }
    for (n = [e._], r = e; (r = r.next) !== e; ) n.push(r._);
    for (r = fd(n), u = 0; u < i; ++u) ((n = t[u]).x -= r.x), (n.y -= r.y);
    return r.r;
  }
  function wd(t) {
    return null == t ? null : Md(t);
  }
  function Md(t) {
    if ("function" != typeof t) throw new Error();
    return t;
  }
  function Ad() {
    return 0;
  }
  function Td(t) {
    return function () {
      return t;
    };
  }
  function Sd(t) {
    return Math.sqrt(t.value);
  }
  function Ed(t) {
    return function (n) {
      n.children || (n.r = Math.max(0, +t(n) || 0));
    };
  }
  function kd(t, n) {
    return function (e) {
      if ((r = e.children)) {
        var r,
          i,
          o,
          a = r.length,
          u = t(e) * n || 0;
        if (u) for (i = 0; i < a; ++i) r[i].r += u;
        if (((o = xd(r)), u)) for (i = 0; i < a; ++i) r[i].r -= u;
        e.r = o + u;
      }
    };
  }
  function Nd(t) {
    return function (n) {
      var e = n.parent;
      (n.r *= t), e && ((n.x = e.x + t * n.x), (n.y = e.y + t * n.y));
    };
  }
  function Cd(t) {
    (t.x0 = Math.round(t.x0)),
      (t.y0 = Math.round(t.y0)),
      (t.x1 = Math.round(t.x1)),
      (t.y1 = Math.round(t.y1));
  }
  function Pd(t, n, e, r, i) {
    for (
      var o,
        a = t.children,
        u = -1,
        c = a.length,
        f = t.value && (r - n) / t.value;
      ++u < c;

    )
      ((o = a[u]).y0 = e), (o.y1 = i), (o.x0 = n), (o.x1 = n += o.value * f);
  }
  (Vh.invert = function (t, n) {
    for (
      var e, r = n, i = r * r, o = i * i * i, a = 0;
      a < 12 &&
      ((o =
        (i =
          (r -= e =
            (r * (Lh + jh * i + o * (Hh + Xh * i)) - n) /
            (Lh + 3 * jh * i + o * (7 * Hh + 9 * Xh * i))) * r) *
        i *
        i),
      !(Uc(e) < zc));
      ++a
    );
    return [
      (Gh * t * (Lh + 3 * jh * i + o * (7 * Hh + 9 * Xh * i))) / Lc(r),
      Jc($c(r) / Gh),
    ];
  }),
    ($h.invert = Dh(Bc)),
    (Wh.invert = function (t, n) {
      var e,
        r = n,
        i = 25;
      do {
        var o = r * r,
          a = o * o;
        r -= e =
          (r *
            (1.007226 +
              o * (0.015085 + a * (0.028874 * o - 0.044475 - 0.005916 * a))) -
            n) /
          (1.007226 +
            o * (0.045255 + a * (0.259866 * o - 0.311325 - 0.005916 * 11 * a)));
      } while (Uc(e) > Pc && --i > 0);
      return [
        t /
          (0.8707 +
            (o = r * r) *
              (o * (o * o * o * (0.003971 - 0.001529 * o) - 0.013791) -
                0.131979)),
        r,
      ];
    }),
    (Zh.invert = Dh(Jc)),
    (Kh.invert = Dh(function (t) {
      return 2 * Bc(t);
    })),
    (Qh.invert = function (t, n) {
      return [-n, 2 * Bc(Hc(t)) - qc];
    }),
    (cd.prototype = rd.prototype =
      {
        constructor: cd,
        count: function () {
          return this.eachAfter(ed);
        },
        each: function (t, n) {
          let e = -1;
          for (const r of this) t.call(n, r, ++e, this);
          return this;
        },
        eachAfter: function (t, n) {
          for (var e, r, i, o = this, a = [o], u = [], c = -1; (o = a.pop()); )
            if ((u.push(o), (e = o.children)))
              for (r = 0, i = e.length; r < i; ++r) a.push(e[r]);
          for (; (o = u.pop()); ) t.call(n, o, ++c, this);
          return this;
        },
        eachBefore: function (t, n) {
          for (var e, r, i = this, o = [i], a = -1; (i = o.pop()); )
            if ((t.call(n, i, ++a, this), (e = i.children)))
              for (r = e.length - 1; r >= 0; --r) o.push(e[r]);
          return this;
        },
        find: function (t, n) {
          let e = -1;
          for (const r of this) if (t.call(n, r, ++e, this)) return r;
        },
        sum: function (t) {
          return this.eachAfter(function (n) {
            for (
              var e = +t(n.data) || 0, r = n.children, i = r && r.length;
              --i >= 0;

            )
              e += r[i].value;
            n.value = e;
          });
        },
        sort: function (t) {
          return this.eachBefore(function (n) {
            n.children && n.children.sort(t);
          });
        },
        path: function (t) {
          for (
            var n = this,
              e = (function (t, n) {
                if (t === n) return t;
                var e = t.ancestors(),
                  r = n.ancestors(),
                  i = null;
                (t = e.pop()), (n = r.pop());
                for (; t === n; ) (i = t), (t = e.pop()), (n = r.pop());
                return i;
              })(n, t),
              r = [n];
            n !== e;

          )
            (n = n.parent), r.push(n);
          for (var i = r.length; t !== e; ) r.splice(i, 0, t), (t = t.parent);
          return r;
        },
        ancestors: function () {
          for (var t = this, n = [t]; (t = t.parent); ) n.push(t);
          return n;
        },
        descendants: function () {
          return Array.from(this);
        },
        leaves: function () {
          var t = [];
          return (
            this.eachBefore(function (n) {
              n.children || t.push(n);
            }),
            t
          );
        },
        links: function () {
          var t = this,
            n = [];
          return (
            t.each(function (e) {
              e !== t && n.push({ source: e.parent, target: e });
            }),
            n
          );
        },
        copy: function () {
          return rd(this).eachBefore(ad);
        },
        [Symbol.iterator]: function* () {
          var t,
            n,
            e,
            r,
            i = this,
            o = [i];
          do {
            for (t = o.reverse(), o = []; (i = t.pop()); )
              if ((yield i, (n = i.children)))
                for (e = 0, r = n.length; e < r; ++e) o.push(n[e]);
          } while (o.length);
        },
      });
  var zd = { depth: -1 },
    Dd = {};
  function qd(t) {
    return t.id;
  }
  function Rd(t) {
    return t.parentId;
  }
  function Fd(t, n) {
    return t.parent === n.parent ? 1 : 2;
  }
  function Od(t) {
    var n = t.children;
    return n ? n[0] : t.t;
  }
  function Id(t) {
    var n = t.children;
    return n ? n[n.length - 1] : t.t;
  }
  function Ud(t, n, e) {
    var r = e / (n.i - t.i);
    (n.c -= r), (n.s += e), (t.c += r), (n.z += e), (n.m += e);
  }
  function Bd(t, n, e) {
    return t.a.parent === n.parent ? t.a : e;
  }
  function Yd(t, n) {
    (this._ = t),
      (this.parent = null),
      (this.children = null),
      (this.A = null),
      (this.a = this),
      (this.z = 0),
      (this.m = 0),
      (this.c = 0),
      (this.s = 0),
      (this.t = null),
      (this.i = n);
  }
  function Ld(t, n, e, r, i) {
    for (
      var o,
        a = t.children,
        u = -1,
        c = a.length,
        f = t.value && (i - e) / t.value;
      ++u < c;

    )
      ((o = a[u]).x0 = n), (o.x1 = r), (o.y0 = e), (o.y1 = e += o.value * f);
  }
  Yd.prototype = Object.create(cd.prototype);
  var jd = (1 + Math.sqrt(5)) / 2;
  function Hd(t, n, e, r, i, o) {
    for (
      var a,
        u,
        c,
        f,
        s,
        l,
        h,
        d,
        p,
        g,
        y,
        v = [],
        _ = n.children,
        b = 0,
        m = 0,
        x = _.length,
        w = n.value;
      b < x;

    ) {
      (c = i - e), (f = o - r);
      do {
        s = _[m++].value;
      } while (!s && m < x);
      for (
        l = h = s,
          y = s * s * (g = Math.max(f / c, c / f) / (w * t)),
          p = Math.max(h / y, y / l);
        m < x;
        ++m
      ) {
        if (
          ((s += u = _[m].value),
          u < l && (l = u),
          u > h && (h = u),
          (y = s * s * g),
          (d = Math.max(h / y, y / l)) > p)
        ) {
          s -= u;
          break;
        }
        p = d;
      }
      v.push((a = { value: s, dice: c < f, children: _.slice(b, m) })),
        a.dice
          ? Pd(a, e, r, i, w ? (r += (f * s) / w) : o)
          : Ld(a, e, r, w ? (e += (c * s) / w) : i, o),
        (w -= s),
        (b = m);
    }
    return v;
  }
  var Xd = (function t(n) {
    function e(t, e, r, i, o) {
      Hd(n, t, e, r, i, o);
    }
    return (
      (e.ratio = function (n) {
        return t((n = +n) > 1 ? n : 1);
      }),
      e
    );
  })(jd);
  var Gd = (function t(n) {
    function e(t, e, r, i, o) {
      if ((a = t._squarify) && a.ratio === n)
        for (var a, u, c, f, s, l = -1, h = a.length, d = t.value; ++l < h; ) {
          for (
            c = (u = a[l]).children, f = u.value = 0, s = c.length;
            f < s;
            ++f
          )
            u.value += c[f].value;
          u.dice
            ? Pd(u, e, r, i, d ? (r += ((o - r) * u.value) / d) : o)
            : Ld(u, e, r, d ? (e += ((i - e) * u.value) / d) : i, o),
            (d -= u.value);
        }
      else (t._squarify = a = Hd(n, t, e, r, i, o)), (a.ratio = n);
    }
    return (
      (e.ratio = function (n) {
        return t((n = +n) > 1 ? n : 1);
      }),
      e
    );
  })(jd);
  function Vd(t, n, e) {
    return (n[0] - t[0]) * (e[1] - t[1]) - (n[1] - t[1]) * (e[0] - t[0]);
  }
  function $d(t, n) {
    return t[0] - n[0] || t[1] - n[1];
  }
  function Wd(t) {
    const n = t.length,
      e = [0, 1];
    let r,
      i = 2;
    for (r = 2; r < n; ++r) {
      for (; i > 1 && Vd(t[e[i - 2]], t[e[i - 1]], t[r]) <= 0; ) --i;
      e[i++] = r;
    }
    return e.slice(0, i);
  }
  var Zd = Math.random,
    Kd = (function t(n) {
      function e(t, e) {
        return (
          (t = null == t ? 0 : +t),
          (e = null == e ? 1 : +e),
          1 === arguments.length ? ((e = t), (t = 0)) : (e -= t),
          function () {
            return n() * e + t;
          }
        );
      }
      return (e.source = t), e;
    })(Zd),
    Qd = (function t(n) {
      function e(t, e) {
        return (
          arguments.length < 2 && ((e = t), (t = 0)),
          (t = Math.floor(t)),
          (e = Math.floor(e) - t),
          function () {
            return Math.floor(n() * e + t);
          }
        );
      }
      return (e.source = t), e;
    })(Zd),
    Jd = (function t(n) {
      function e(t, e) {
        var r, i;
        return (
          (t = null == t ? 0 : +t),
          (e = null == e ? 1 : +e),
          function () {
            var o;
            if (null != r) (o = r), (r = null);
            else
              do {
                (r = 2 * n() - 1), (o = 2 * n() - 1), (i = r * r + o * o);
              } while (!i || i > 1);
            return t + e * o * Math.sqrt((-2 * Math.log(i)) / i);
          }
        );
      }
      return (e.source = t), e;
    })(Zd),
    tp = (function t(n) {
      var e = Jd.source(n);
      function r() {
        var t = e.apply(this, arguments);
        return function () {
          return Math.exp(t());
        };
      }
      return (r.source = t), r;
    })(Zd),
    np = (function t(n) {
      function e(t) {
        return (t = +t) <= 0
          ? () => 0
          : function () {
              for (var e = 0, r = t; r > 1; --r) e += n();
              return e + r * n();
            };
      }
      return (e.source = t), e;
    })(Zd),
    ep = (function t(n) {
      var e = np.source(n);
      function r(t) {
        if (0 == (t = +t)) return n;
        var r = e(t);
        return function () {
          return r() / t;
        };
      }
      return (r.source = t), r;
    })(Zd),
    rp = (function t(n) {
      function e(t) {
        return function () {
          return -Math.log1p(-n()) / t;
        };
      }
      return (e.source = t), e;
    })(Zd),
    ip = (function t(n) {
      function e(t) {
        if ((t = +t) < 0) throw new RangeError("invalid alpha");
        return (
          (t = 1 / -t),
          function () {
            return Math.pow(1 - n(), t);
          }
        );
      }
      return (e.source = t), e;
    })(Zd),
    op = (function t(n) {
      function e(t) {
        if ((t = +t) < 0 || t > 1) throw new RangeError("invalid p");
        return function () {
          return Math.floor(n() + t);
        };
      }
      return (e.source = t), e;
    })(Zd),
    ap = (function t(n) {
      function e(t) {
        if ((t = +t) < 0 || t > 1) throw new RangeError("invalid p");
        return 0 === t
          ? () => 1 / 0
          : 1 === t
          ? () => 1
          : ((t = Math.log1p(-t)),
            function () {
              return 1 + Math.floor(Math.log1p(-n()) / t);
            });
      }
      return (e.source = t), e;
    })(Zd),
    up = (function t(n) {
      var e = Jd.source(n)();
      function r(t, r) {
        if ((t = +t) < 0) throw new RangeError("invalid k");
        if (0 === t) return () => 0;
        if (((r = null == r ? 1 : +r), 1 === t))
          return () => -Math.log1p(-n()) * r;
        var i = (t < 1 ? t + 1 : t) - 1 / 3,
          o = 1 / (3 * Math.sqrt(i)),
          a = t < 1 ? () => Math.pow(n(), 1 / t) : () => 1;
        return function () {
          do {
            do {
              var t = e(),
                u = 1 + o * t;
            } while (u <= 0);
            u *= u * u;
            var c = 1 - n();
          } while (
            c >= 1 - 0.0331 * t * t * t * t &&
            Math.log(c) >= 0.5 * t * t + i * (1 - u + Math.log(u))
          );
          return i * u * a() * r;
        };
      }
      return (r.source = t), r;
    })(Zd),
    cp = (function t(n) {
      var e = up.source(n);
      function r(t, n) {
        var r = e(t),
          i = e(n);
        return function () {
          var t = r();
          return 0 === t ? 0 : t / (t + i());
        };
      }
      return (r.source = t), r;
    })(Zd),
    fp = (function t(n) {
      var e = ap.source(n),
        r = cp.source(n);
      function i(t, n) {
        return (
          (t = +t),
          (n = +n) >= 1
            ? () => t
            : n <= 0
            ? () => 0
            : function () {
                for (
                  var i = 0, o = t, a = n;
                  o * a > 16 && o * (1 - a) > 16;

                ) {
                  var u = Math.floor((o + 1) * a),
                    c = r(u, o - u + 1)();
                  c <= a
                    ? ((i += u), (o -= u), (a = (a - c) / (1 - c)))
                    : ((o = u - 1), (a /= c));
                }
                for (
                  var f = a < 0.5, s = e(f ? a : 1 - a), l = s(), h = 0;
                  l <= o;
                  ++h
                )
                  l += s();
                return i + (f ? h : o - h);
              }
        );
      }
      return (i.source = t), i;
    })(Zd),
    sp = (function t(n) {
      function e(t, e, r) {
        var i;
        return (
          0 == (t = +t)
            ? (i = (t) => -Math.log(t))
            : ((t = 1 / t), (i = (n) => Math.pow(n, t))),
          (e = null == e ? 0 : +e),
          (r = null == r ? 1 : +r),
          function () {
            return e + r * i(-Math.log1p(-n()));
          }
        );
      }
      return (e.source = t), e;
    })(Zd),
    lp = (function t(n) {
      function e(t, e) {
        return (
          (t = null == t ? 0 : +t),
          (e = null == e ? 1 : +e),
          function () {
            return t + e * Math.tan(Math.PI * n());
          }
        );
      }
      return (e.source = t), e;
    })(Zd),
    hp = (function t(n) {
      function e(t, e) {
        return (
          (t = null == t ? 0 : +t),
          (e = null == e ? 1 : +e),
          function () {
            var r = n();
            return t + e * Math.log(r / (1 - r));
          }
        );
      }
      return (e.source = t), e;
    })(Zd),
    dp = (function t(n) {
      var e = up.source(n),
        r = fp.source(n);
      function i(t) {
        return function () {
          for (var i = 0, o = t; o > 16; ) {
            var a = Math.floor(0.875 * o),
              u = e(a)();
            if (u > o) return i + r(a - 1, o / u)();
            (i += a), (o -= u);
          }
          for (var c = -Math.log1p(-n()), f = 0; c <= o; ++f)
            c -= Math.log1p(-n());
          return i + f;
        };
      }
      return (i.source = t), i;
    })(Zd);
  const pp = 1 / 4294967296;
  function gp(t, n) {
    switch (arguments.length) {
      case 0:
        break;
      case 1:
        this.range(t);
        break;
      default:
        this.range(n).domain(t);
    }
    return this;
  }
  function yp(t, n) {
    switch (arguments.length) {
      case 0:
        break;
      case 1:
        "function" == typeof t ? this.interpolator(t) : this.range(t);
        break;
      default:
        this.domain(t),
          "function" == typeof n ? this.interpolator(n) : this.range(n);
    }
    return this;
  }
  const vp = Symbol("implicit");
  function _p() {
    var t = new y(),
      n = [],
      e = [],
      r = vp;
    function i(i) {
      let o = t.get(i);
      if (void 0 === o) {
        if (r !== vp) return r;
        t.set(i, (o = n.push(i) - 1));
      }
      return e[o % e.length];
    }
    return (
      (i.domain = function (e) {
        if (!arguments.length) return n.slice();
        (n = []), (t = new y());
        for (const r of e) t.has(r) || t.set(r, n.push(r) - 1);
        return i;
      }),
      (i.range = function (t) {
        return arguments.length ? ((e = Array.from(t)), i) : e.slice();
      }),
      (i.unknown = function (t) {
        return arguments.length ? ((r = t), i) : r;
      }),
      (i.copy = function () {
        return _p(n, e).unknown(r);
      }),
      gp.apply(i, arguments),
      i
    );
  }
  function bp() {
    var t,
      n,
      e = _p().unknown(void 0),
      r = e.domain,
      i = e.range,
      o = 0,
      a = 1,
      u = !1,
      c = 0,
      f = 0,
      s = 0.5;
    function l() {
      var e = r().length,
        l = a < o,
        h = l ? a : o,
        d = l ? o : a;
      (t = (d - h) / Math.max(1, e - c + 2 * f)),
        u && (t = Math.floor(t)),
        (h += (d - h - t * (e - c)) * s),
        (n = t * (1 - c)),
        u && ((h = Math.round(h)), (n = Math.round(n)));
      var p = J(e).map(function (n) {
        return h + t * n;
      });
      return i(l ? p.reverse() : p);
    }
    return (
      delete e.unknown,
      (e.domain = function (t) {
        return arguments.length ? (r(t), l()) : r();
      }),
      (e.range = function (t) {
        return arguments.length
          ? (([o, a] = t), (o = +o), (a = +a), l())
          : [o, a];
      }),
      (e.rangeRound = function (t) {
        return ([o, a] = t), (o = +o), (a = +a), (u = !0), l();
      }),
      (e.bandwidth = function () {
        return n;
      }),
      (e.step = function () {
        return t;
      }),
      (e.round = function (t) {
        return arguments.length ? ((u = !!t), l()) : u;
      }),
      (e.padding = function (t) {
        return arguments.length ? ((c = Math.min(1, (f = +t))), l()) : c;
      }),
      (e.paddingInner = function (t) {
        return arguments.length ? ((c = Math.min(1, t)), l()) : c;
      }),
      (e.paddingOuter = function (t) {
        return arguments.length ? ((f = +t), l()) : f;
      }),
      (e.align = function (t) {
        return arguments.length ? ((s = Math.max(0, Math.min(1, t))), l()) : s;
      }),
      (e.copy = function () {
        return bp(r(), [o, a])
          .round(u)
          .paddingInner(c)
          .paddingOuter(f)
          .align(s);
      }),
      gp.apply(l(), arguments)
    );
  }
  function mp(t) {
    var n = t.copy;
    return (
      (t.padding = t.paddingOuter),
      delete t.paddingInner,
      delete t.paddingOuter,
      (t.copy = function () {
        return mp(n());
      }),
      t
    );
  }
  function xp(t) {
    return +t;
  }
  var wp = [0, 1];
  function Mp(t) {
    return t;
  }
  function Ap(t, n) {
    return (n -= t = +t)
      ? function (e) {
          return (e - t) / n;
        }
      : (function (t) {
          return function () {
            return t;
          };
        })(isNaN(n) ? NaN : 0.5);
  }
  function Tp(t, n, e) {
    var r = t[0],
      i = t[1],
      o = n[0],
      a = n[1];
    return (
      i < r ? ((r = Ap(i, r)), (o = e(a, o))) : ((r = Ap(r, i)), (o = e(o, a))),
      function (t) {
        return o(r(t));
      }
    );
  }
  function Sp(t, n, e) {
    var r = Math.min(t.length, n.length) - 1,
      i = new Array(r),
      a = new Array(r),
      u = -1;
    for (
      t[r] < t[0] && ((t = t.slice().reverse()), (n = n.slice().reverse()));
      ++u < r;

    )
      (i[u] = Ap(t[u], t[u + 1])), (a[u] = e(n[u], n[u + 1]));
    return function (n) {
      var e = o(t, n, 1, r) - 1;
      return a[e](i[e](n));
    };
  }
  function Ep(t, n) {
    return n
      .domain(t.domain())
      .range(t.range())
      .interpolate(t.interpolate())
      .clamp(t.clamp())
      .unknown(t.unknown());
  }
  function kp() {
    var t,
      n,
      e,
      r,
      i,
      o,
      a = wp,
      u = wp,
      c = kr,
      f = Mp;
    function s() {
      var t = Math.min(a.length, u.length);
      return (
        f !== Mp &&
          (f = (function (t, n) {
            var e;
            return (
              t > n && ((e = t), (t = n), (n = e)),
              function (e) {
                return Math.max(t, Math.min(n, e));
              }
            );
          })(a[0], a[t - 1])),
        (r = t > 2 ? Sp : Tp),
        (i = o = null),
        l
      );
    }
    function l(n) {
      return null == n || isNaN((n = +n))
        ? e
        : (i || (i = r(a.map(t), u, c)))(t(f(n)));
    }
    return (
      (l.invert = function (e) {
        return f(n((o || (o = r(u, a.map(t), Mr)))(e)));
      }),
      (l.domain = function (t) {
        return arguments.length ? ((a = Array.from(t, xp)), s()) : a.slice();
      }),
      (l.range = function (t) {
        return arguments.length ? ((u = Array.from(t)), s()) : u.slice();
      }),
      (l.rangeRound = function (t) {
        return (u = Array.from(t)), (c = Nr), s();
      }),
      (l.clamp = function (t) {
        return arguments.length ? ((f = !!t || Mp), s()) : f !== Mp;
      }),
      (l.interpolate = function (t) {
        return arguments.length ? ((c = t), s()) : c;
      }),
      (l.unknown = function (t) {
        return arguments.length ? ((e = t), l) : e;
      }),
      function (e, r) {
        return (t = e), (n = r), s();
      }
    );
  }
  function Np() {
    return kp()(Mp, Mp);
  }
  function Cp(n, e, r, i) {
    var o,
      a = U(n, e, r);
    switch ((i = _c(null == i ? ",f" : i)).type) {
      case "s":
        var u = Math.max(Math.abs(n), Math.abs(e));
        return (
          null != i.precision || isNaN((o = Nc(a, u))) || (i.precision = o),
          t.formatPrefix(i, u)
        );
      case "":
      case "e":
      case "g":
      case "p":
      case "r":
        null != i.precision ||
          isNaN((o = Cc(a, Math.max(Math.abs(n), Math.abs(e))))) ||
          (i.precision = o - ("e" === i.type));
        break;
      case "f":
      case "%":
        null != i.precision ||
          isNaN((o = kc(a))) ||
          (i.precision = o - 2 * ("%" === i.type));
    }
    return t.format(i);
  }
  function Pp(t) {
    var n = t.domain;
    return (
      (t.ticks = function (t) {
        var e = n();
        return O(e[0], e[e.length - 1], null == t ? 10 : t);
      }),
      (t.tickFormat = function (t, e) {
        var r = n();
        return Cp(r[0], r[r.length - 1], null == t ? 10 : t, e);
      }),
      (t.nice = function (e) {
        null == e && (e = 10);
        var r,
          i,
          o = n(),
          a = 0,
          u = o.length - 1,
          c = o[a],
          f = o[u],
          s = 10;
        for (
          f < c && ((i = c), (c = f), (f = i), (i = a), (a = u), (u = i));
          s-- > 0;

        ) {
          if ((i = I(c, f, e)) === r) return (o[a] = c), (o[u] = f), n(o);
          if (i > 0) (c = Math.floor(c / i) * i), (f = Math.ceil(f / i) * i);
          else {
            if (!(i < 0)) break;
            (c = Math.ceil(c * i) / i), (f = Math.floor(f * i) / i);
          }
          r = i;
        }
        return t;
      }),
      t
    );
  }
  function zp(t, n) {
    var e,
      r = 0,
      i = (t = t.slice()).length - 1,
      o = t[r],
      a = t[i];
    return (
      a < o && ((e = r), (r = i), (i = e), (e = o), (o = a), (a = e)),
      (t[r] = n.floor(o)),
      (t[i] = n.ceil(a)),
      t
    );
  }
  function Dp(t) {
    return Math.log(t);
  }
  function qp(t) {
    return Math.exp(t);
  }
  function Rp(t) {
    return -Math.log(-t);
  }
  function Fp(t) {
    return -Math.exp(-t);
  }
  function Op(t) {
    return isFinite(t) ? +("1e" + t) : t < 0 ? 0 : t;
  }
  function Ip(t) {
    return function (n) {
      return -t(-n);
    };
  }
  function Up(n) {
    var e,
      r,
      i = n(Dp, qp),
      o = i.domain,
      a = 10;
    function u() {
      return (
        (e = (function (t) {
          return t === Math.E
            ? Math.log
            : (10 === t && Math.log10) ||
                (2 === t && Math.log2) ||
                ((t = Math.log(t)),
                function (n) {
                  return Math.log(n) / t;
                });
        })(a)),
        (r = (function (t) {
          return 10 === t
            ? Op
            : t === Math.E
            ? Math.exp
            : function (n) {
                return Math.pow(t, n);
              };
        })(a)),
        o()[0] < 0 ? ((e = Ip(e)), (r = Ip(r)), n(Rp, Fp)) : n(Dp, qp),
        i
      );
    }
    return (
      (i.base = function (t) {
        return arguments.length ? ((a = +t), u()) : a;
      }),
      (i.domain = function (t) {
        return arguments.length ? (o(t), u()) : o();
      }),
      (i.ticks = function (t) {
        var n,
          i = o(),
          u = i[0],
          c = i[i.length - 1];
        (n = c < u) && ((h = u), (u = c), (c = h));
        var f,
          s,
          l,
          h = e(u),
          d = e(c),
          p = null == t ? 10 : +t,
          g = [];
        if (!(a % 1) && d - h < p) {
          if (((h = Math.floor(h)), (d = Math.ceil(d)), u > 0)) {
            for (; h <= d; ++h)
              for (s = 1, f = r(h); s < a; ++s)
                if (!((l = f * s) < u)) {
                  if (l > c) break;
                  g.push(l);
                }
          } else
            for (; h <= d; ++h)
              for (s = a - 1, f = r(h); s >= 1; --s)
                if (!((l = f * s) < u)) {
                  if (l > c) break;
                  g.push(l);
                }
          2 * g.length < p && (g = O(u, c, p));
        } else g = O(h, d, Math.min(d - h, p)).map(r);
        return n ? g.reverse() : g;
      }),
      (i.tickFormat = function (n, o) {
        if (
          (null == o && (o = 10 === a ? ".0e" : ","),
          "function" != typeof o && (o = t.format(o)),
          n === 1 / 0)
        )
          return o;
        null == n && (n = 10);
        var u = Math.max(1, (a * n) / i.ticks().length);
        return function (t) {
          var n = t / r(Math.round(e(t)));
          return n * a < a - 0.5 && (n *= a), n <= u ? o(t) : "";
        };
      }),
      (i.nice = function () {
        return o(
          zp(o(), {
            floor: function (t) {
              return r(Math.floor(e(t)));
            },
            ceil: function (t) {
              return r(Math.ceil(e(t)));
            },
          })
        );
      }),
      i
    );
  }
  function Bp(t) {
    return function (n) {
      return Math.sign(n) * Math.log1p(Math.abs(n / t));
    };
  }
  function Yp(t) {
    return function (n) {
      return Math.sign(n) * Math.expm1(Math.abs(n)) * t;
    };
  }
  function Lp(t) {
    var n = 1,
      e = t(Bp(n), Yp(n));
    return (
      (e.constant = function (e) {
        return arguments.length ? t(Bp((n = +e)), Yp(n)) : n;
      }),
      Pp(e)
    );
  }
  function jp(t) {
    return function (n) {
      return n < 0 ? -Math.pow(-n, t) : Math.pow(n, t);
    };
  }
  function Hp(t) {
    return t < 0 ? -Math.sqrt(-t) : Math.sqrt(t);
  }
  function Xp(t) {
    return t < 0 ? -t * t : t * t;
  }
  function Gp(t) {
    var n = t(Mp, Mp),
      e = 1;
    function r() {
      return 1 === e ? t(Mp, Mp) : 0.5 === e ? t(Hp, Xp) : t(jp(e), jp(1 / e));
    }
    return (
      (n.exponent = function (t) {
        return arguments.length ? ((e = +t), r()) : e;
      }),
      Pp(n)
    );
  }
  function Vp() {
    var t = Gp(kp());
    return (
      (t.copy = function () {
        return Ep(t, Vp()).exponent(t.exponent());
      }),
      gp.apply(t, arguments),
      t
    );
  }
  function $p(t) {
    return Math.sign(t) * t * t;
  }
  function Wp(t) {
    return Math.sign(t) * Math.sqrt(Math.abs(t));
  }
  var Zp = new Date(),
    Kp = new Date();
  function Qp(t, n, e, r) {
    function i(n) {
      return t((n = 0 === arguments.length ? new Date() : new Date(+n))), n;
    }
    return (
      (i.floor = function (n) {
        return t((n = new Date(+n))), n;
      }),
      (i.ceil = function (e) {
        return t((e = new Date(e - 1))), n(e, 1), t(e), e;
      }),
      (i.round = function (t) {
        var n = i(t),
          e = i.ceil(t);
        return t - n < e - t ? n : e;
      }),
      (i.offset = function (t, e) {
        return n((t = new Date(+t)), null == e ? 1 : Math.floor(e)), t;
      }),
      (i.range = function (e, r, o) {
        var a,
          u = [];
        if (
          ((e = i.ceil(e)),
          (o = null == o ? 1 : Math.floor(o)),
          !(e < r && o > 0))
        )
          return u;
        do {
          u.push((a = new Date(+e))), n(e, o), t(e);
        } while (a < e && e < r);
        return u;
      }),
      (i.filter = function (e) {
        return Qp(
          function (n) {
            if (n >= n) for (; t(n), !e(n); ) n.setTime(n - 1);
          },
          function (t, r) {
            if (t >= t)
              if (r < 0) for (; ++r <= 0; ) for (; n(t, -1), !e(t); );
              else for (; --r >= 0; ) for (; n(t, 1), !e(t); );
          }
        );
      }),
      e &&
        ((i.count = function (n, r) {
          return (
            Zp.setTime(+n), Kp.setTime(+r), t(Zp), t(Kp), Math.floor(e(Zp, Kp))
          );
        }),
        (i.every = function (t) {
          return (
            (t = Math.floor(t)),
            isFinite(t) && t > 0
              ? t > 1
                ? i.filter(
                    r
                      ? function (n) {
                          return r(n) % t == 0;
                        }
                      : function (n) {
                          return i.count(0, n) % t == 0;
                        }
                  )
                : i
              : null
          );
        })),
      i
    );
  }
  var Jp = Qp(
    function () {},
    function (t, n) {
      t.setTime(+t + n);
    },
    function (t, n) {
      return n - t;
    }
  );
  Jp.every = function (t) {
    return (
      (t = Math.floor(t)),
      isFinite(t) && t > 0
        ? t > 1
          ? Qp(
              function (n) {
                n.setTime(Math.floor(n / t) * t);
              },
              function (n, e) {
                n.setTime(+n + e * t);
              },
              function (n, e) {
                return (e - n) / t;
              }
            )
          : Jp
        : null
    );
  };
  var tg = Jp.range;
  const ng = 1e3,
    eg = 6e4,
    rg = 36e5,
    ig = 864e5,
    og = 6048e5,
    ag = 2592e6,
    ug = 31536e6;
  var cg = Qp(
      function (t) {
        t.setTime(t - t.getMilliseconds());
      },
      function (t, n) {
        t.setTime(+t + n * ng);
      },
      function (t, n) {
        return (n - t) / ng;
      },
      function (t) {
        return t.getUTCSeconds();
      }
    ),
    fg = cg.range,
    sg = Qp(
      function (t) {
        t.setTime(t - t.getMilliseconds() - t.getSeconds() * ng);
      },
      function (t, n) {
        t.setTime(+t + n * eg);
      },
      function (t, n) {
        return (n - t) / eg;
      },
      function (t) {
        return t.getMinutes();
      }
    ),
    lg = sg.range,
    hg = Qp(
      function (t) {
        t.setTime(
          t - t.getMilliseconds() - t.getSeconds() * ng - t.getMinutes() * eg
        );
      },
      function (t, n) {
        t.setTime(+t + n * rg);
      },
      function (t, n) {
        return (n - t) / rg;
      },
      function (t) {
        return t.getHours();
      }
    ),
    dg = hg.range,
    pg = Qp(
      (t) => t.setHours(0, 0, 0, 0),
      (t, n) => t.setDate(t.getDate() + n),
      (t, n) =>
        (n - t - (n.getTimezoneOffset() - t.getTimezoneOffset()) * eg) / ig,
      (t) => t.getDate() - 1
    ),
    gg = pg.range;
  function yg(t) {
    return Qp(
      function (n) {
        n.setDate(n.getDate() - ((n.getDay() + 7 - t) % 7)),
          n.setHours(0, 0, 0, 0);
      },
      function (t, n) {
        t.setDate(t.getDate() + 7 * n);
      },
      function (t, n) {
        return (
          (n - t - (n.getTimezoneOffset() - t.getTimezoneOffset()) * eg) / og
        );
      }
    );
  }
  var vg = yg(0),
    _g = yg(1),
    bg = yg(2),
    mg = yg(3),
    xg = yg(4),
    wg = yg(5),
    Mg = yg(6),
    Ag = vg.range,
    Tg = _g.range,
    Sg = bg.range,
    Eg = mg.range,
    kg = xg.range,
    Ng = wg.range,
    Cg = Mg.range,
    Pg = Qp(
      function (t) {
        t.setDate(1), t.setHours(0, 0, 0, 0);
      },
      function (t, n) {
        t.setMonth(t.getMonth() + n);
      },
      function (t, n) {
        return (
          n.getMonth() - t.getMonth() + 12 * (n.getFullYear() - t.getFullYear())
        );
      },
      function (t) {
        return t.getMonth();
      }
    ),
    zg = Pg.range,
    Dg = Qp(
      function (t) {
        t.setMonth(0, 1), t.setHours(0, 0, 0, 0);
      },
      function (t, n) {
        t.setFullYear(t.getFullYear() + n);
      },
      function (t, n) {
        return n.getFullYear() - t.getFullYear();
      },
      function (t) {
        return t.getFullYear();
      }
    );
  Dg.every = function (t) {
    return isFinite((t = Math.floor(t))) && t > 0
      ? Qp(
          function (n) {
            n.setFullYear(Math.floor(n.getFullYear() / t) * t),
              n.setMonth(0, 1),
              n.setHours(0, 0, 0, 0);
          },
          function (n, e) {
            n.setFullYear(n.getFullYear() + e * t);
          }
        )
      : null;
  };
  var qg = Dg.range,
    Rg = Qp(
      function (t) {
        t.setUTCSeconds(0, 0);
      },
      function (t, n) {
        t.setTime(+t + n * eg);
      },
      function (t, n) {
        return (n - t) / eg;
      },
      function (t) {
        return t.getUTCMinutes();
      }
    ),
    Fg = Rg.range,
    Og = Qp(
      function (t) {
        t.setUTCMinutes(0, 0, 0);
      },
      function (t, n) {
        t.setTime(+t + n * rg);
      },
      function (t, n) {
        return (n - t) / rg;
      },
      function (t) {
        return t.getUTCHours();
      }
    ),
    Ig = Og.range,
    Ug = Qp(
      function (t) {
        t.setUTCHours(0, 0, 0, 0);
      },
      function (t, n) {
        t.setUTCDate(t.getUTCDate() + n);
      },
      function (t, n) {
        return (n - t) / ig;
      },
      function (t) {
        return t.getUTCDate() - 1;
      }
    ),
    Bg = Ug.range;
  function Yg(t) {
    return Qp(
      function (n) {
        n.setUTCDate(n.getUTCDate() - ((n.getUTCDay() + 7 - t) % 7)),
          n.setUTCHours(0, 0, 0, 0);
      },
      function (t, n) {
        t.setUTCDate(t.getUTCDate() + 7 * n);
      },
      function (t, n) {
        return (n - t) / og;
      }
    );
  }
  var Lg = Yg(0),
    jg = Yg(1),
    Hg = Yg(2),
    Xg = Yg(3),
    Gg = Yg(4),
    Vg = Yg(5),
    $g = Yg(6),
    Wg = Lg.range,
    Zg = jg.range,
    Kg = Hg.range,
    Qg = Xg.range,
    Jg = Gg.range,
    ty = Vg.range,
    ny = $g.range,
    ey = Qp(
      function (t) {
        t.setUTCDate(1), t.setUTCHours(0, 0, 0, 0);
      },
      function (t, n) {
        t.setUTCMonth(t.getUTCMonth() + n);
      },
      function (t, n) {
        return (
          n.getUTCMonth() -
          t.getUTCMonth() +
          12 * (n.getUTCFullYear() - t.getUTCFullYear())
        );
      },
      function (t) {
        return t.getUTCMonth();
      }
    ),
    ry = ey.range,
    iy = Qp(
      function (t) {
        t.setUTCMonth(0, 1), t.setUTCHours(0, 0, 0, 0);
      },
      function (t, n) {
        t.setUTCFullYear(t.getUTCFullYear() + n);
      },
      function (t, n) {
        return n.getUTCFullYear() - t.getUTCFullYear();
      },
      function (t) {
        return t.getUTCFullYear();
      }
    );
  iy.every = function (t) {
    return isFinite((t = Math.floor(t))) && t > 0
      ? Qp(
          function (n) {
            n.setUTCFullYear(Math.floor(n.getUTCFullYear() / t) * t),
              n.setUTCMonth(0, 1),
              n.setUTCHours(0, 0, 0, 0);
          },
          function (n, e) {
            n.setUTCFullYear(n.getUTCFullYear() + e * t);
          }
        )
      : null;
  };
  var oy = iy.range;
  function ay(t, n, r, i, o, a) {
    const u = [
      [cg, 1, ng],
      [cg, 5, 5e3],
      [cg, 15, 15e3],
      [cg, 30, 3e4],
      [a, 1, eg],
      [a, 5, 3e5],
      [a, 15, 9e5],
      [a, 30, 18e5],
      [o, 1, rg],
      [o, 3, 108e5],
      [o, 6, 216e5],
      [o, 12, 432e5],
      [i, 1, ig],
      [i, 2, 1728e5],
      [r, 1, og],
      [n, 1, ag],
      [n, 3, 7776e6],
      [t, 1, ug],
    ];
    function c(n, r, i) {
      const o = Math.abs(r - n) / i,
        a = e(([, , t]) => t).right(u, o);
      if (a === u.length) return t.every(U(n / ug, r / ug, i));
      if (0 === a) return Jp.every(Math.max(U(n, r, i), 1));
      const [c, f] = u[o / u[a - 1][2] < u[a][2] / o ? a - 1 : a];
      return c.every(f);
    }
    return [
      function (t, n, e) {
        const r = n < t;
        r && ([t, n] = [n, t]);
        const i = e && "function" == typeof e.range ? e : c(t, n, e),
          o = i ? i.range(t, +n + 1) : [];
        return r ? o.reverse() : o;
      },
      c,
    ];
  }
  const [uy, cy] = ay(iy, ey, Lg, Ug, Og, Rg),
    [fy, sy] = ay(Dg, Pg, vg, pg, hg, sg);
  function ly(t) {
    if (0 <= t.y && t.y < 100) {
      var n = new Date(-1, t.m, t.d, t.H, t.M, t.S, t.L);
      return n.setFullYear(t.y), n;
    }
    return new Date(t.y, t.m, t.d, t.H, t.M, t.S, t.L);
  }
  function hy(t) {
    if (0 <= t.y && t.y < 100) {
      var n = new Date(Date.UTC(-1, t.m, t.d, t.H, t.M, t.S, t.L));
      return n.setUTCFullYear(t.y), n;
    }
    return new Date(Date.UTC(t.y, t.m, t.d, t.H, t.M, t.S, t.L));
  }
  function dy(t, n, e) {
    return { y: t, m: n, d: e, H: 0, M: 0, S: 0, L: 0 };
  }
  function py(t) {
    var n = t.dateTime,
      e = t.date,
      r = t.time,
      i = t.periods,
      o = t.days,
      a = t.shortDays,
      u = t.months,
      c = t.shortMonths,
      f = wy(i),
      s = My(i),
      l = wy(o),
      h = My(o),
      d = wy(a),
      p = My(a),
      g = wy(u),
      y = My(u),
      v = wy(c),
      _ = My(c),
      b = {
        a: function (t) {
          return a[t.getDay()];
        },
        A: function (t) {
          return o[t.getDay()];
        },
        b: function (t) {
          return c[t.getMonth()];
        },
        B: function (t) {
          return u[t.getMonth()];
        },
        c: null,
        d: Hy,
        e: Hy,
        f: Wy,
        g: av,
        G: cv,
        H: Xy,
        I: Gy,
        j: Vy,
        L: $y,
        m: Zy,
        M: Ky,
        p: function (t) {
          return i[+(t.getHours() >= 12)];
        },
        q: function (t) {
          return 1 + ~~(t.getMonth() / 3);
        },
        Q: Pv,
        s: zv,
        S: Qy,
        u: Jy,
        U: tv,
        V: ev,
        w: rv,
        W: iv,
        x: null,
        X: null,
        y: ov,
        Y: uv,
        Z: fv,
        "%": Cv,
      },
      m = {
        a: function (t) {
          return a[t.getUTCDay()];
        },
        A: function (t) {
          return o[t.getUTCDay()];
        },
        b: function (t) {
          return c[t.getUTCMonth()];
        },
        B: function (t) {
          return u[t.getUTCMonth()];
        },
        c: null,
        d: sv,
        e: sv,
        f: gv,
        g: Sv,
        G: kv,
        H: lv,
        I: hv,
        j: dv,
        L: pv,
        m: yv,
        M: vv,
        p: function (t) {
          return i[+(t.getUTCHours() >= 12)];
        },
        q: function (t) {
          return 1 + ~~(t.getUTCMonth() / 3);
        },
        Q: Pv,
        s: zv,
        S: _v,
        u: bv,
        U: mv,
        V: wv,
        w: Mv,
        W: Av,
        x: null,
        X: null,
        y: Tv,
        Y: Ev,
        Z: Nv,
        "%": Cv,
      },
      x = {
        a: function (t, n, e) {
          var r = d.exec(n.slice(e));
          return r ? ((t.w = p.get(r[0].toLowerCase())), e + r[0].length) : -1;
        },
        A: function (t, n, e) {
          var r = l.exec(n.slice(e));
          return r ? ((t.w = h.get(r[0].toLowerCase())), e + r[0].length) : -1;
        },
        b: function (t, n, e) {
          var r = v.exec(n.slice(e));
          return r ? ((t.m = _.get(r[0].toLowerCase())), e + r[0].length) : -1;
        },
        B: function (t, n, e) {
          var r = g.exec(n.slice(e));
          return r ? ((t.m = y.get(r[0].toLowerCase())), e + r[0].length) : -1;
        },
        c: function (t, e, r) {
          return A(t, n, e, r);
        },
        d: qy,
        e: qy,
        f: By,
        g: Cy,
        G: Ny,
        H: Fy,
        I: Fy,
        j: Ry,
        L: Uy,
        m: Dy,
        M: Oy,
        p: function (t, n, e) {
          var r = f.exec(n.slice(e));
          return r ? ((t.p = s.get(r[0].toLowerCase())), e + r[0].length) : -1;
        },
        q: zy,
        Q: Ly,
        s: jy,
        S: Iy,
        u: Ty,
        U: Sy,
        V: Ey,
        w: Ay,
        W: ky,
        x: function (t, n, r) {
          return A(t, e, n, r);
        },
        X: function (t, n, e) {
          return A(t, r, n, e);
        },
        y: Cy,
        Y: Ny,
        Z: Py,
        "%": Yy,
      };
    function w(t, n) {
      return function (e) {
        var r,
          i,
          o,
          a = [],
          u = -1,
          c = 0,
          f = t.length;
        for (e instanceof Date || (e = new Date(+e)); ++u < f; )
          37 === t.charCodeAt(u) &&
            (a.push(t.slice(c, u)),
            null != (i = yy[(r = t.charAt(++u))])
              ? (r = t.charAt(++u))
              : (i = "e" === r ? " " : "0"),
            (o = n[r]) && (r = o(e, i)),
            a.push(r),
            (c = u + 1));
        return a.push(t.slice(c, u)), a.join("");
      };
    }
    function M(t, n) {
      return function (e) {
        var r,
          i,
          o = dy(1900, void 0, 1);
        if (A(o, t, (e += ""), 0) != e.length) return null;
        if ("Q" in o) return new Date(o.Q);
        if ("s" in o) return new Date(1e3 * o.s + ("L" in o ? o.L : 0));
        if (
          (n && !("Z" in o) && (o.Z = 0),
          "p" in o && (o.H = (o.H % 12) + 12 * o.p),
          void 0 === o.m && (o.m = "q" in o ? o.q : 0),
          "V" in o)
        ) {
          if (o.V < 1 || o.V > 53) return null;
          "w" in o || (o.w = 1),
            "Z" in o
              ? ((i = (r = hy(dy(o.y, 0, 1))).getUTCDay()),
                (r = i > 4 || 0 === i ? jg.ceil(r) : jg(r)),
                (r = Ug.offset(r, 7 * (o.V - 1))),
                (o.y = r.getUTCFullYear()),
                (o.m = r.getUTCMonth()),
                (o.d = r.getUTCDate() + ((o.w + 6) % 7)))
              : ((i = (r = ly(dy(o.y, 0, 1))).getDay()),
                (r = i > 4 || 0 === i ? _g.ceil(r) : _g(r)),
                (r = pg.offset(r, 7 * (o.V - 1))),
                (o.y = r.getFullYear()),
                (o.m = r.getMonth()),
                (o.d = r.getDate() + ((o.w + 6) % 7)));
        } else ("W" in o || "U" in o) && ("w" in o || (o.w = "u" in o ? o.u % 7 : "W" in o ? 1 : 0), (i = "Z" in o ? hy(dy(o.y, 0, 1)).getUTCDay() : ly(dy(o.y, 0, 1)).getDay()), (o.m = 0), (o.d = "W" in o ? ((o.w + 6) % 7) + 7 * o.W - ((i + 5) % 7) : o.w + 7 * o.U - ((i + 6) % 7)));
        return "Z" in o
          ? ((o.H += (o.Z / 100) | 0), (o.M += o.Z % 100), hy(o))
          : ly(o);
      };
    }
    function A(t, n, e, r) {
      for (var i, o, a = 0, u = n.length, c = e.length; a < u; ) {
        if (r >= c) return -1;
        if (37 === (i = n.charCodeAt(a++))) {
          if (
            ((i = n.charAt(a++)),
            !(o = x[i in yy ? n.charAt(a++) : i]) || (r = o(t, e, r)) < 0)
          )
            return -1;
        } else if (i != e.charCodeAt(r++)) return -1;
      }
      return r;
    }
    return (
      (b.x = w(e, b)),
      (b.X = w(r, b)),
      (b.c = w(n, b)),
      (m.x = w(e, m)),
      (m.X = w(r, m)),
      (m.c = w(n, m)),
      {
        format: function (t) {
          var n = w((t += ""), b);
          return (
            (n.toString = function () {
              return t;
            }),
            n
          );
        },
        parse: function (t) {
          var n = M((t += ""), !1);
          return (
            (n.toString = function () {
              return t;
            }),
            n
          );
        },
        utcFormat: function (t) {
          var n = w((t += ""), m);
          return (
            (n.toString = function () {
              return t;
            }),
            n
          );
        },
        utcParse: function (t) {
          var n = M((t += ""), !0);
          return (
            (n.toString = function () {
              return t;
            }),
            n
          );
        },
      }
    );
  }
  var gy,
    yy = { "-": "", _: " ", 0: "0" },
    vy = /^\s*\d+/,
    _y = /^%/,
    by = /[\\^$*+?|[\]().{}]/g;
  function my(t, n, e) {
    var r = t < 0 ? "-" : "",
      i = (r ? -t : t) + "",
      o = i.length;
    return r + (o < e ? new Array(e - o + 1).join(n) + i : i);
  }
  function xy(t) {
    return t.replace(by, "\\$&");
  }
  function wy(t) {
    return new RegExp("^(?:" + t.map(xy).join("|") + ")", "i");
  }
  function My(t) {
    return new Map(t.map((t, n) => [t.toLowerCase(), n]));
  }
  function Ay(t, n, e) {
    var r = vy.exec(n.slice(e, e + 1));
    return r ? ((t.w = +r[0]), e + r[0].length) : -1;
  }
  function Ty(t, n, e) {
    var r = vy.exec(n.slice(e, e + 1));
    return r ? ((t.u = +r[0]), e + r[0].length) : -1;
  }
  function Sy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r ? ((t.U = +r[0]), e + r[0].length) : -1;
  }
  function Ey(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r ? ((t.V = +r[0]), e + r[0].length) : -1;
  }
  function ky(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r ? ((t.W = +r[0]), e + r[0].length) : -1;
  }
  function Ny(t, n, e) {
    var r = vy.exec(n.slice(e, e + 4));
    return r ? ((t.y = +r[0]), e + r[0].length) : -1;
  }
  function Cy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r
      ? ((t.y = +r[0] + (+r[0] > 68 ? 1900 : 2e3)), e + r[0].length)
      : -1;
  }
  function Py(t, n, e) {
    var r = /^(Z)|([+-]\d\d)(?::?(\d\d))?/.exec(n.slice(e, e + 6));
    return r
      ? ((t.Z = r[1] ? 0 : -(r[2] + (r[3] || "00"))), e + r[0].length)
      : -1;
  }
  function zy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 1));
    return r ? ((t.q = 3 * r[0] - 3), e + r[0].length) : -1;
  }
  function Dy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r ? ((t.m = r[0] - 1), e + r[0].length) : -1;
  }
  function qy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r ? ((t.d = +r[0]), e + r[0].length) : -1;
  }
  function Ry(t, n, e) {
    var r = vy.exec(n.slice(e, e + 3));
    return r ? ((t.m = 0), (t.d = +r[0]), e + r[0].length) : -1;
  }
  function Fy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r ? ((t.H = +r[0]), e + r[0].length) : -1;
  }
  function Oy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r ? ((t.M = +r[0]), e + r[0].length) : -1;
  }
  function Iy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 2));
    return r ? ((t.S = +r[0]), e + r[0].length) : -1;
  }
  function Uy(t, n, e) {
    var r = vy.exec(n.slice(e, e + 3));
    return r ? ((t.L = +r[0]), e + r[0].length) : -1;
  }
  function By(t, n, e) {
    var r = vy.exec(n.slice(e, e + 6));
    return r ? ((t.L = Math.floor(r[0] / 1e3)), e + r[0].length) : -1;
  }
  function Yy(t, n, e) {
    var r = _y.exec(n.slice(e, e + 1));
    return r ? e + r[0].length : -1;
  }
  function Ly(t, n, e) {
    var r = vy.exec(n.slice(e));
    return r ? ((t.Q = +r[0]), e + r[0].length) : -1;
  }
  function jy(t, n, e) {
    var r = vy.exec(n.slice(e));
    return r ? ((t.s = +r[0]), e + r[0].length) : -1;
  }
  function Hy(t, n) {
    return my(t.getDate(), n, 2);
  }
  function Xy(t, n) {
    return my(t.getHours(), n, 2);
  }
  function Gy(t, n) {
    return my(t.getHours() % 12 || 12, n, 2);
  }
  function Vy(t, n) {
    return my(1 + pg.count(Dg(t), t), n, 3);
  }
  function $y(t, n) {
    return my(t.getMilliseconds(), n, 3);
  }
  function Wy(t, n) {
    return $y(t, n) + "000";
  }
  function Zy(t, n) {
    return my(t.getMonth() + 1, n, 2);
  }
  function Ky(t, n) {
    return my(t.getMinutes(), n, 2);
  }
  function Qy(t, n) {
    return my(t.getSeconds(), n, 2);
  }
  function Jy(t) {
    var n = t.getDay();
    return 0 === n ? 7 : n;
  }
  function tv(t, n) {
    return my(vg.count(Dg(t) - 1, t), n, 2);
  }
  function nv(t) {
    var n = t.getDay();
    return n >= 4 || 0 === n ? xg(t) : xg.ceil(t);
  }
  function ev(t, n) {
    return (t = nv(t)), my(xg.count(Dg(t), t) + (4 === Dg(t).getDay()), n, 2);
  }
  function rv(t) {
    return t.getDay();
  }
  function iv(t, n) {
    return my(_g.count(Dg(t) - 1, t), n, 2);
  }
  function ov(t, n) {
    return my(t.getFullYear() % 100, n, 2);
  }
  function av(t, n) {
    return my((t = nv(t)).getFullYear() % 100, n, 2);
  }
  function uv(t, n) {
    return my(t.getFullYear() % 1e4, n, 4);
  }
  function cv(t, n) {
    var e = t.getDay();
    return my(
      (t = e >= 4 || 0 === e ? xg(t) : xg.ceil(t)).getFullYear() % 1e4,
      n,
      4
    );
  }
  function fv(t) {
    var n = t.getTimezoneOffset();
    return (
      (n > 0 ? "-" : ((n *= -1), "+")) +
      my((n / 60) | 0, "0", 2) +
      my(n % 60, "0", 2)
    );
  }
  function sv(t, n) {
    return my(t.getUTCDate(), n, 2);
  }
  function lv(t, n) {
    return my(t.getUTCHours(), n, 2);
  }
  function hv(t, n) {
    return my(t.getUTCHours() % 12 || 12, n, 2);
  }
  function dv(t, n) {
    return my(1 + Ug.count(iy(t), t), n, 3);
  }
  function pv(t, n) {
    return my(t.getUTCMilliseconds(), n, 3);
  }
  function gv(t, n) {
    return pv(t, n) + "000";
  }
  function yv(t, n) {
    return my(t.getUTCMonth() + 1, n, 2);
  }
  function vv(t, n) {
    return my(t.getUTCMinutes(), n, 2);
  }
  function _v(t, n) {
    return my(t.getUTCSeconds(), n, 2);
  }
  function bv(t) {
    var n = t.getUTCDay();
    return 0 === n ? 7 : n;
  }
  function mv(t, n) {
    return my(Lg.count(iy(t) - 1, t), n, 2);
  }
  function xv(t) {
    var n = t.getUTCDay();
    return n >= 4 || 0 === n ? Gg(t) : Gg.ceil(t);
  }
  function wv(t, n) {
    return (
      (t = xv(t)), my(Gg.count(iy(t), t) + (4 === iy(t).getUTCDay()), n, 2)
    );
  }
  function Mv(t) {
    return t.getUTCDay();
  }
  function Av(t, n) {
    return my(jg.count(iy(t) - 1, t), n, 2);
  }
  function Tv(t, n) {
    return my(t.getUTCFullYear() % 100, n, 2);
  }
  function Sv(t, n) {
    return my((t = xv(t)).getUTCFullYear() % 100, n, 2);
  }
  function Ev(t, n) {
    return my(t.getUTCFullYear() % 1e4, n, 4);
  }
  function kv(t, n) {
    var e = t.getUTCDay();
    return my(
      (t = e >= 4 || 0 === e ? Gg(t) : Gg.ceil(t)).getUTCFullYear() % 1e4,
      n,
      4
    );
  }
  function Nv() {
    return "+0000";
  }
  function Cv() {
    return "%";
  }
  function Pv(t) {
    return +t;
  }
  function zv(t) {
    return Math.floor(+t / 1e3);
  }
  function Dv(n) {
    return (
      (gy = py(n)),
      (t.timeFormat = gy.format),
      (t.timeParse = gy.parse),
      (t.utcFormat = gy.utcFormat),
      (t.utcParse = gy.utcParse),
      gy
    );
  }
  (t.timeFormat = void 0),
    (t.timeParse = void 0),
    (t.utcFormat = void 0),
    (t.utcParse = void 0),
    Dv({
      dateTime: "%x, %X",
      date: "%-m/%-d/%Y",
      time: "%-I:%M:%S %p",
      periods: ["AM", "PM"],
      days: [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
      ],
      shortDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      months: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
      ],
      shortMonths: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
    });
  var qv = "%Y-%m-%dT%H:%M:%S.%LZ";
  var Rv = Date.prototype.toISOString
    ? function (t) {
        return t.toISOString();
      }
    : t.utcFormat(qv);
  var Fv = +new Date("2000-01-01T00:00:00.000Z")
    ? function (t) {
        var n = new Date(t);
        return isNaN(n) ? null : n;
      }
    : t.utcParse(qv);
  function Ov(t) {
    return new Date(t);
  }
  function Iv(t) {
    return t instanceof Date ? +t : +new Date(+t);
  }
  function Uv(t, n, e, r, i, o, a, u, c, f) {
    var s = Np(),
      l = s.invert,
      h = s.domain,
      d = f(".%L"),
      p = f(":%S"),
      g = f("%I:%M"),
      y = f("%I %p"),
      v = f("%a %d"),
      _ = f("%b %d"),
      b = f("%B"),
      m = f("%Y");
    function x(t) {
      return (
        c(t) < t
          ? d
          : u(t) < t
          ? p
          : a(t) < t
          ? g
          : o(t) < t
          ? y
          : r(t) < t
          ? i(t) < t
            ? v
            : _
          : e(t) < t
          ? b
          : m
      )(t);
    }
    return (
      (s.invert = function (t) {
        return new Date(l(t));
      }),
      (s.domain = function (t) {
        return arguments.length ? h(Array.from(t, Iv)) : h().map(Ov);
      }),
      (s.ticks = function (n) {
        var e = h();
        return t(e[0], e[e.length - 1], null == n ? 10 : n);
      }),
      (s.tickFormat = function (t, n) {
        return null == n ? x : f(n);
      }),
      (s.nice = function (t) {
        var e = h();
        return (
          (t && "function" == typeof t.range) ||
            (t = n(e[0], e[e.length - 1], null == t ? 10 : t)),
          t ? h(zp(e, t)) : s
        );
      }),
      (s.copy = function () {
        return Ep(s, Uv(t, n, e, r, i, o, a, u, c, f));
      }),
      s
    );
  }
  function Bv() {
    var t,
      n,
      e,
      r,
      i,
      o = 0,
      a = 1,
      u = Mp,
      c = !1;
    function f(n) {
      return null == n || isNaN((n = +n))
        ? i
        : u(
            0 === e
              ? 0.5
              : ((n = (r(n) - t) * e), c ? Math.max(0, Math.min(1, n)) : n)
          );
    }
    function s(t) {
      return function (n) {
        var e, r;
        return arguments.length
          ? (([e, r] = n), (u = t(e, r)), f)
          : [u(0), u(1)];
      };
    }
    return (
      (f.domain = function (i) {
        return arguments.length
          ? (([o, a] = i),
            (t = r((o = +o))),
            (n = r((a = +a))),
            (e = t === n ? 0 : 1 / (n - t)),
            f)
          : [o, a];
      }),
      (f.clamp = function (t) {
        return arguments.length ? ((c = !!t), f) : c;
      }),
      (f.interpolator = function (t) {
        return arguments.length ? ((u = t), f) : u;
      }),
      (f.range = s(kr)),
      (f.rangeRound = s(Nr)),
      (f.unknown = function (t) {
        return arguments.length ? ((i = t), f) : i;
      }),
      function (i) {
        return (
          (r = i), (t = i(o)), (n = i(a)), (e = t === n ? 0 : 1 / (n - t)), f
        );
      }
    );
  }
  function Yv(t, n) {
    return n
      .domain(t.domain())
      .interpolator(t.interpolator())
      .clamp(t.clamp())
      .unknown(t.unknown());
  }
  function Lv() {
    var t = Gp(Bv());
    return (
      (t.copy = function () {
        return Yv(t, Lv()).exponent(t.exponent());
      }),
      yp.apply(t, arguments)
    );
  }
  function jv() {
    var t,
      n,
      e,
      r,
      i,
      o,
      a,
      u = 0,
      c = 0.5,
      f = 1,
      s = 1,
      l = Mp,
      h = !1;
    function d(t) {
      return isNaN((t = +t))
        ? a
        : ((t = 0.5 + ((t = +o(t)) - n) * (s * t < s * n ? r : i)),
          l(h ? Math.max(0, Math.min(1, t)) : t));
    }
    function p(t) {
      return function (n) {
        var e, r, i;
        return arguments.length
          ? (([e, r, i] = n), (l = $r(t, [e, r, i])), d)
          : [l(0), l(0.5), l(1)];
      };
    }
    return (
      (d.domain = function (a) {
        return arguments.length
          ? (([u, c, f] = a),
            (t = o((u = +u))),
            (n = o((c = +c))),
            (e = o((f = +f))),
            (r = t === n ? 0 : 0.5 / (n - t)),
            (i = n === e ? 0 : 0.5 / (e - n)),
            (s = n < t ? -1 : 1),
            d)
          : [u, c, f];
      }),
      (d.clamp = function (t) {
        return arguments.length ? ((h = !!t), d) : h;
      }),
      (d.interpolator = function (t) {
        return arguments.length ? ((l = t), d) : l;
      }),
      (d.range = p(kr)),
      (d.rangeRound = p(Nr)),
      (d.unknown = function (t) {
        return arguments.length ? ((a = t), d) : a;
      }),
      function (a) {
        return (
          (o = a),
          (t = a(u)),
          (n = a(c)),
          (e = a(f)),
          (r = t === n ? 0 : 0.5 / (n - t)),
          (i = n === e ? 0 : 0.5 / (e - n)),
          (s = n < t ? -1 : 1),
          d
        );
      }
    );
  }
  function Hv() {
    var t = Gp(jv());
    return (
      (t.copy = function () {
        return Yv(t, Hv()).exponent(t.exponent());
      }),
      yp.apply(t, arguments)
    );
  }
  function Xv(t) {
    for (var n = (t.length / 6) | 0, e = new Array(n), r = 0; r < n; )
      e[r] = "#" + t.slice(6 * r, 6 * ++r);
    return e;
  }
  var Gv = Xv("1f77b4ff7f0e2ca02cd627289467bd8c564be377c27f7f7fbcbd2217becf"),
    Vv = Xv("7fc97fbeaed4fdc086ffff99386cb0f0027fbf5b17666666"),
    $v = Xv("1b9e77d95f027570b3e7298a66a61ee6ab02a6761d666666"),
    Wv = Xv(
      "a6cee31f78b4b2df8a33a02cfb9a99e31a1cfdbf6fff7f00cab2d66a3d9affff99b15928"
    ),
    Zv = Xv("fbb4aeb3cde3ccebc5decbe4fed9a6ffffcce5d8bdfddaecf2f2f2"),
    Kv = Xv("b3e2cdfdcdaccbd5e8f4cae4e6f5c9fff2aef1e2cccccccc"),
    Qv = Xv("e41a1c377eb84daf4a984ea3ff7f00ffff33a65628f781bf999999"),
    Jv = Xv("66c2a5fc8d628da0cbe78ac3a6d854ffd92fe5c494b3b3b3"),
    t_ = Xv(
      "8dd3c7ffffb3bebadafb807280b1d3fdb462b3de69fccde5d9d9d9bc80bdccebc5ffed6f"
    ),
    n_ = Xv("4e79a7f28e2ce1575976b7b259a14fedc949af7aa1ff9da79c755fbab0ab"),
    e_ = (t) => vr(t[t.length - 1]),
    r_ = new Array(3)
      .concat(
        "d8b365f5f5f55ab4ac",
        "a6611adfc27d80cdc1018571",
        "a6611adfc27df5f5f580cdc1018571",
        "8c510ad8b365f6e8c3c7eae55ab4ac01665e",
        "8c510ad8b365f6e8c3f5f5f5c7eae55ab4ac01665e",
        "8c510abf812ddfc27df6e8c3c7eae580cdc135978f01665e",
        "8c510abf812ddfc27df6e8c3f5f5f5c7eae580cdc135978f01665e",
        "5430058c510abf812ddfc27df6e8c3c7eae580cdc135978f01665e003c30",
        "5430058c510abf812ddfc27df6e8c3f5f5f5c7eae580cdc135978f01665e003c30"
      )
      .map(Xv),
    i_ = e_(r_),
    o_ = new Array(3)
      .concat(
        "af8dc3f7f7f77fbf7b",
        "7b3294c2a5cfa6dba0008837",
        "7b3294c2a5cff7f7f7a6dba0008837",
        "762a83af8dc3e7d4e8d9f0d37fbf7b1b7837",
        "762a83af8dc3e7d4e8f7f7f7d9f0d37fbf7b1b7837",
        "762a839970abc2a5cfe7d4e8d9f0d3a6dba05aae611b7837",
        "762a839970abc2a5cfe7d4e8f7f7f7d9f0d3a6dba05aae611b7837",
        "40004b762a839970abc2a5cfe7d4e8d9f0d3a6dba05aae611b783700441b",
        "40004b762a839970abc2a5cfe7d4e8f7f7f7d9f0d3a6dba05aae611b783700441b"
      )
      .map(Xv),
    a_ = e_(o_),
    u_ = new Array(3)
      .concat(
        "e9a3c9f7f7f7a1d76a",
        "d01c8bf1b6dab8e1864dac26",
        "d01c8bf1b6daf7f7f7b8e1864dac26",
        "c51b7de9a3c9fde0efe6f5d0a1d76a4d9221",
        "c51b7de9a3c9fde0eff7f7f7e6f5d0a1d76a4d9221",
        "c51b7dde77aef1b6dafde0efe6f5d0b8e1867fbc414d9221",
        "c51b7dde77aef1b6dafde0eff7f7f7e6f5d0b8e1867fbc414d9221",
        "8e0152c51b7dde77aef1b6dafde0efe6f5d0b8e1867fbc414d9221276419",
        "8e0152c51b7dde77aef1b6dafde0eff7f7f7e6f5d0b8e1867fbc414d9221276419"
      )
      .map(Xv),
    c_ = e_(u_),
    f_ = new Array(3)
      .concat(
        "998ec3f7f7f7f1a340",
        "5e3c99b2abd2fdb863e66101",
        "5e3c99b2abd2f7f7f7fdb863e66101",
        "542788998ec3d8daebfee0b6f1a340b35806",
        "542788998ec3d8daebf7f7f7fee0b6f1a340b35806",
        "5427888073acb2abd2d8daebfee0b6fdb863e08214b35806",
        "5427888073acb2abd2d8daebf7f7f7fee0b6fdb863e08214b35806",
        "2d004b5427888073acb2abd2d8daebfee0b6fdb863e08214b358067f3b08",
        "2d004b5427888073acb2abd2d8daebf7f7f7fee0b6fdb863e08214b358067f3b08"
      )
      .map(Xv),
    s_ = e_(f_),
    l_ = new Array(3)
      .concat(
        "ef8a62f7f7f767a9cf",
        "ca0020f4a58292c5de0571b0",
        "ca0020f4a582f7f7f792c5de0571b0",
        "b2182bef8a62fddbc7d1e5f067a9cf2166ac",
        "b2182bef8a62fddbc7f7f7f7d1e5f067a9cf2166ac",
        "b2182bd6604df4a582fddbc7d1e5f092c5de4393c32166ac",
        "b2182bd6604df4a582fddbc7f7f7f7d1e5f092c5de4393c32166ac",
        "67001fb2182bd6604df4a582fddbc7d1e5f092c5de4393c32166ac053061",
        "67001fb2182bd6604df4a582fddbc7f7f7f7d1e5f092c5de4393c32166ac053061"
      )
      .map(Xv),
    h_ = e_(l_),
    d_ = new Array(3)
      .concat(
        "ef8a62ffffff999999",
        "ca0020f4a582bababa404040",
        "ca0020f4a582ffffffbababa404040",
        "b2182bef8a62fddbc7e0e0e09999994d4d4d",
        "b2182bef8a62fddbc7ffffffe0e0e09999994d4d4d",
        "b2182bd6604df4a582fddbc7e0e0e0bababa8787874d4d4d",
        "b2182bd6604df4a582fddbc7ffffffe0e0e0bababa8787874d4d4d",
        "67001fb2182bd6604df4a582fddbc7e0e0e0bababa8787874d4d4d1a1a1a",
        "67001fb2182bd6604df4a582fddbc7ffffffe0e0e0bababa8787874d4d4d1a1a1a"
      )
      .map(Xv),
    p_ = e_(d_),
    g_ = new Array(3)
      .concat(
        "fc8d59ffffbf91bfdb",
        "d7191cfdae61abd9e92c7bb6",
        "d7191cfdae61ffffbfabd9e92c7bb6",
        "d73027fc8d59fee090e0f3f891bfdb4575b4",
        "d73027fc8d59fee090ffffbfe0f3f891bfdb4575b4",
        "d73027f46d43fdae61fee090e0f3f8abd9e974add14575b4",
        "d73027f46d43fdae61fee090ffffbfe0f3f8abd9e974add14575b4",
        "a50026d73027f46d43fdae61fee090e0f3f8abd9e974add14575b4313695",
        "a50026d73027f46d43fdae61fee090ffffbfe0f3f8abd9e974add14575b4313695"
      )
      .map(Xv),
    y_ = e_(g_),
    v_ = new Array(3)
      .concat(
        "fc8d59ffffbf91cf60",
        "d7191cfdae61a6d96a1a9641",
        "d7191cfdae61ffffbfa6d96a1a9641",
        "d73027fc8d59fee08bd9ef8b91cf601a9850",
        "d73027fc8d59fee08bffffbfd9ef8b91cf601a9850",
        "d73027f46d43fdae61fee08bd9ef8ba6d96a66bd631a9850",
        "d73027f46d43fdae61fee08bffffbfd9ef8ba6d96a66bd631a9850",
        "a50026d73027f46d43fdae61fee08bd9ef8ba6d96a66bd631a9850006837",
        "a50026d73027f46d43fdae61fee08bffffbfd9ef8ba6d96a66bd631a9850006837"
      )
      .map(Xv),
    __ = e_(v_),
    b_ = new Array(3)
      .concat(
        "fc8d59ffffbf99d594",
        "d7191cfdae61abdda42b83ba",
        "d7191cfdae61ffffbfabdda42b83ba",
        "d53e4ffc8d59fee08be6f59899d5943288bd",
        "d53e4ffc8d59fee08bffffbfe6f59899d5943288bd",
        "d53e4ff46d43fdae61fee08be6f598abdda466c2a53288bd",
        "d53e4ff46d43fdae61fee08bffffbfe6f598abdda466c2a53288bd",
        "9e0142d53e4ff46d43fdae61fee08be6f598abdda466c2a53288bd5e4fa2",
        "9e0142d53e4ff46d43fdae61fee08bffffbfe6f598abdda466c2a53288bd5e4fa2"
      )
      .map(Xv),
    m_ = e_(b_),
    x_ = new Array(3)
      .concat(
        "e5f5f999d8c92ca25f",
        "edf8fbb2e2e266c2a4238b45",
        "edf8fbb2e2e266c2a42ca25f006d2c",
        "edf8fbccece699d8c966c2a42ca25f006d2c",
        "edf8fbccece699d8c966c2a441ae76238b45005824",
        "f7fcfde5f5f9ccece699d8c966c2a441ae76238b45005824",
        "f7fcfde5f5f9ccece699d8c966c2a441ae76238b45006d2c00441b"
      )
      .map(Xv),
    w_ = e_(x_),
    M_ = new Array(3)
      .concat(
        "e0ecf49ebcda8856a7",
        "edf8fbb3cde38c96c688419d",
        "edf8fbb3cde38c96c68856a7810f7c",
        "edf8fbbfd3e69ebcda8c96c68856a7810f7c",
        "edf8fbbfd3e69ebcda8c96c68c6bb188419d6e016b",
        "f7fcfde0ecf4bfd3e69ebcda8c96c68c6bb188419d6e016b",
        "f7fcfde0ecf4bfd3e69ebcda8c96c68c6bb188419d810f7c4d004b"
      )
      .map(Xv),
    A_ = e_(M_),
    T_ = new Array(3)
      .concat(
        "e0f3dba8ddb543a2ca",
        "f0f9e8bae4bc7bccc42b8cbe",
        "f0f9e8bae4bc7bccc443a2ca0868ac",
        "f0f9e8ccebc5a8ddb57bccc443a2ca0868ac",
        "f0f9e8ccebc5a8ddb57bccc44eb3d32b8cbe08589e",
        "f7fcf0e0f3dbccebc5a8ddb57bccc44eb3d32b8cbe08589e",
        "f7fcf0e0f3dbccebc5a8ddb57bccc44eb3d32b8cbe0868ac084081"
      )
      .map(Xv),
    S_ = e_(T_),
    E_ = new Array(3)
      .concat(
        "fee8c8fdbb84e34a33",
        "fef0d9fdcc8afc8d59d7301f",
        "fef0d9fdcc8afc8d59e34a33b30000",
        "fef0d9fdd49efdbb84fc8d59e34a33b30000",
        "fef0d9fdd49efdbb84fc8d59ef6548d7301f990000",
        "fff7ecfee8c8fdd49efdbb84fc8d59ef6548d7301f990000",
        "fff7ecfee8c8fdd49efdbb84fc8d59ef6548d7301fb300007f0000"
      )
      .map(Xv),
    k_ = e_(E_),
    N_ = new Array(3)
      .concat(
        "ece2f0a6bddb1c9099",
        "f6eff7bdc9e167a9cf02818a",
        "f6eff7bdc9e167a9cf1c9099016c59",
        "f6eff7d0d1e6a6bddb67a9cf1c9099016c59",
        "f6eff7d0d1e6a6bddb67a9cf3690c002818a016450",
        "fff7fbece2f0d0d1e6a6bddb67a9cf3690c002818a016450",
        "fff7fbece2f0d0d1e6a6bddb67a9cf3690c002818a016c59014636"
      )
      .map(Xv),
    C_ = e_(N_),
    P_ = new Array(3)
      .concat(
        "ece7f2a6bddb2b8cbe",
        "f1eef6bdc9e174a9cf0570b0",
        "f1eef6bdc9e174a9cf2b8cbe045a8d",
        "f1eef6d0d1e6a6bddb74a9cf2b8cbe045a8d",
        "f1eef6d0d1e6a6bddb74a9cf3690c00570b0034e7b",
        "fff7fbece7f2d0d1e6a6bddb74a9cf3690c00570b0034e7b",
        "fff7fbece7f2d0d1e6a6bddb74a9cf3690c00570b0045a8d023858"
      )
      .map(Xv),
    z_ = e_(P_),
    D_ = new Array(3)
      .concat(
        "e7e1efc994c7dd1c77",
        "f1eef6d7b5d8df65b0ce1256",
        "f1eef6d7b5d8df65b0dd1c77980043",
        "f1eef6d4b9dac994c7df65b0dd1c77980043",
        "f1eef6d4b9dac994c7df65b0e7298ace125691003f",
        "f7f4f9e7e1efd4b9dac994c7df65b0e7298ace125691003f",
        "f7f4f9e7e1efd4b9dac994c7df65b0e7298ace125698004367001f"
      )
      .map(Xv),
    q_ = e_(D_),
    R_ = new Array(3)
      .concat(
        "fde0ddfa9fb5c51b8a",
        "feebe2fbb4b9f768a1ae017e",
        "feebe2fbb4b9f768a1c51b8a7a0177",
        "feebe2fcc5c0fa9fb5f768a1c51b8a7a0177",
        "feebe2fcc5c0fa9fb5f768a1dd3497ae017e7a0177",
        "fff7f3fde0ddfcc5c0fa9fb5f768a1dd3497ae017e7a0177",
        "fff7f3fde0ddfcc5c0fa9fb5f768a1dd3497ae017e7a017749006a"
      )
      .map(Xv),
    F_ = e_(R_),
    O_ = new Array(3)
      .concat(
        "edf8b17fcdbb2c7fb8",
        "ffffcca1dab441b6c4225ea8",
        "ffffcca1dab441b6c42c7fb8253494",
        "ffffccc7e9b47fcdbb41b6c42c7fb8253494",
        "ffffccc7e9b47fcdbb41b6c41d91c0225ea80c2c84",
        "ffffd9edf8b1c7e9b47fcdbb41b6c41d91c0225ea80c2c84",
        "ffffd9edf8b1c7e9b47fcdbb41b6c41d91c0225ea8253494081d58"
      )
      .map(Xv),
    I_ = e_(O_),
    U_ = new Array(3)
      .concat(
        "f7fcb9addd8e31a354",
        "ffffccc2e69978c679238443",
        "ffffccc2e69978c67931a354006837",
        "ffffccd9f0a3addd8e78c67931a354006837",
        "ffffccd9f0a3addd8e78c67941ab5d238443005a32",
        "ffffe5f7fcb9d9f0a3addd8e78c67941ab5d238443005a32",
        "ffffe5f7fcb9d9f0a3addd8e78c67941ab5d238443006837004529"
      )
      .map(Xv),
    B_ = e_(U_),
    Y_ = new Array(3)
      .concat(
        "fff7bcfec44fd95f0e",
        "ffffd4fed98efe9929cc4c02",
        "ffffd4fed98efe9929d95f0e993404",
        "ffffd4fee391fec44ffe9929d95f0e993404",
        "ffffd4fee391fec44ffe9929ec7014cc4c028c2d04",
        "ffffe5fff7bcfee391fec44ffe9929ec7014cc4c028c2d04",
        "ffffe5fff7bcfee391fec44ffe9929ec7014cc4c02993404662506"
      )
      .map(Xv),
    L_ = e_(Y_),
    j_ = new Array(3)
      .concat(
        "ffeda0feb24cf03b20",
        "ffffb2fecc5cfd8d3ce31a1c",
        "ffffb2fecc5cfd8d3cf03b20bd0026",
        "ffffb2fed976feb24cfd8d3cf03b20bd0026",
        "ffffb2fed976feb24cfd8d3cfc4e2ae31a1cb10026",
        "ffffccffeda0fed976feb24cfd8d3cfc4e2ae31a1cb10026",
        "ffffccffeda0fed976feb24cfd8d3cfc4e2ae31a1cbd0026800026"
      )
      .map(Xv),
    H_ = e_(j_),
    X_ = new Array(3)
      .concat(
        "deebf79ecae13182bd",
        "eff3ffbdd7e76baed62171b5",
        "eff3ffbdd7e76baed63182bd08519c",
        "eff3ffc6dbef9ecae16baed63182bd08519c",
        "eff3ffc6dbef9ecae16baed64292c62171b5084594",
        "f7fbffdeebf7c6dbef9ecae16baed64292c62171b5084594",
        "f7fbffdeebf7c6dbef9ecae16baed64292c62171b508519c08306b"
      )
      .map(Xv),
    G_ = e_(X_),
    V_ = new Array(3)
      .concat(
        "e5f5e0a1d99b31a354",
        "edf8e9bae4b374c476238b45",
        "edf8e9bae4b374c47631a354006d2c",
        "edf8e9c7e9c0a1d99b74c47631a354006d2c",
        "edf8e9c7e9c0a1d99b74c47641ab5d238b45005a32",
        "f7fcf5e5f5e0c7e9c0a1d99b74c47641ab5d238b45005a32",
        "f7fcf5e5f5e0c7e9c0a1d99b74c47641ab5d238b45006d2c00441b"
      )
      .map(Xv),
    $_ = e_(V_),
    W_ = new Array(3)
      .concat(
        "f0f0f0bdbdbd636363",
        "f7f7f7cccccc969696525252",
        "f7f7f7cccccc969696636363252525",
        "f7f7f7d9d9d9bdbdbd969696636363252525",
        "f7f7f7d9d9d9bdbdbd969696737373525252252525",
        "fffffff0f0f0d9d9d9bdbdbd969696737373525252252525",
        "fffffff0f0f0d9d9d9bdbdbd969696737373525252252525000000"
      )
      .map(Xv),
    Z_ = e_(W_),
    K_ = new Array(3)
      .concat(
        "efedf5bcbddc756bb1",
        "f2f0f7cbc9e29e9ac86a51a3",
        "f2f0f7cbc9e29e9ac8756bb154278f",
        "f2f0f7dadaebbcbddc9e9ac8756bb154278f",
        "f2f0f7dadaebbcbddc9e9ac8807dba6a51a34a1486",
        "fcfbfdefedf5dadaebbcbddc9e9ac8807dba6a51a34a1486",
        "fcfbfdefedf5dadaebbcbddc9e9ac8807dba6a51a354278f3f007d"
      )
      .map(Xv),
    Q_ = e_(K_),
    J_ = new Array(3)
      .concat(
        "fee0d2fc9272de2d26",
        "fee5d9fcae91fb6a4acb181d",
        "fee5d9fcae91fb6a4ade2d26a50f15",
        "fee5d9fcbba1fc9272fb6a4ade2d26a50f15",
        "fee5d9fcbba1fc9272fb6a4aef3b2ccb181d99000d",
        "fff5f0fee0d2fcbba1fc9272fb6a4aef3b2ccb181d99000d",
        "fff5f0fee0d2fcbba1fc9272fb6a4aef3b2ccb181da50f1567000d"
      )
      .map(Xv),
    tb = e_(J_),
    nb = new Array(3)
      .concat(
        "fee6cefdae6be6550d",
        "feeddefdbe85fd8d3cd94701",
        "feeddefdbe85fd8d3ce6550da63603",
        "feeddefdd0a2fdae6bfd8d3ce6550da63603",
        "feeddefdd0a2fdae6bfd8d3cf16913d948018c2d04",
        "fff5ebfee6cefdd0a2fdae6bfd8d3cf16913d948018c2d04",
        "fff5ebfee6cefdd0a2fdae6bfd8d3cf16913d94801a636037f2704"
      )
      .map(Xv),
    eb = e_(nb);
  var rb = Vr(or(300, 0.5, 0), or(-240, 0.5, 1)),
    ib = Vr(or(-100, 0.75, 0.35), or(80, 1.5, 0.8)),
    ob = Vr(or(260, 0.75, 0.35), or(80, 1.5, 0.8)),
    ab = or();
  var ub = we(),
    cb = Math.PI / 3,
    fb = (2 * Math.PI) / 3;
  function sb(t) {
    var n = t.length;
    return function (e) {
      return t[Math.max(0, Math.min(n - 1, Math.floor(e * n)))];
    };
  }
  var lb = sb(
      Xv(
        "44015444025645045745055946075a46085c460a5d460b5e470d60470e6147106347116447136548146748166848176948186a481a6c481b6d481c6e481d6f481f70482071482173482374482475482576482677482878482979472a7a472c7a472d7b472e7c472f7d46307e46327e46337f463480453581453781453882443983443a83443b84433d84433e85423f854240864241864142874144874045884046883f47883f48893e49893e4a893e4c8a3d4d8a3d4e8a3c4f8a3c508b3b518b3b528b3a538b3a548c39558c39568c38588c38598c375a8c375b8d365c8d365d8d355e8d355f8d34608d34618d33628d33638d32648e32658e31668e31678e31688e30698e306a8e2f6b8e2f6c8e2e6d8e2e6e8e2e6f8e2d708e2d718e2c718e2c728e2c738e2b748e2b758e2a768e2a778e2a788e29798e297a8e297b8e287c8e287d8e277e8e277f8e27808e26818e26828e26828e25838e25848e25858e24868e24878e23888e23898e238a8d228b8d228c8d228d8d218e8d218f8d21908d21918c20928c20928c20938c1f948c1f958b1f968b1f978b1f988b1f998a1f9a8a1e9b8a1e9c891e9d891f9e891f9f881fa0881fa1881fa1871fa28720a38620a48621a58521a68522a78522a88423a98324aa8325ab8225ac8226ad8127ad8128ae8029af7f2ab07f2cb17e2db27d2eb37c2fb47c31b57b32b67a34b67935b77937b87838b9773aba763bbb753dbc743fbc7340bd7242be7144bf7046c06f48c16e4ac16d4cc26c4ec36b50c46a52c56954c56856c66758c7655ac8645cc8635ec96260ca6063cb5f65cb5e67cc5c69cd5b6ccd5a6ece5870cf5773d05675d05477d1537ad1517cd2507fd34e81d34d84d44b86d54989d5488bd6468ed64590d74393d74195d84098d83e9bd93c9dd93ba0da39a2da37a5db36a8db34aadc32addc30b0dd2fb2dd2db5de2bb8de29bade28bddf26c0df25c2df23c5e021c8e020cae11fcde11dd0e11cd2e21bd5e21ad8e219dae319dde318dfe318e2e418e5e419e7e419eae51aece51befe51cf1e51df4e61ef6e620f8e621fbe723fde725"
      )
    ),
    hb = sb(
      Xv(
        "00000401000501010601010802010902020b02020d03030f03031204041405041606051806051a07061c08071e0907200a08220b09240c09260d0a290e0b2b100b2d110c2f120d31130d34140e36150e38160f3b180f3d19103f1a10421c10441d11471e114920114b21114e22115024125325125527125829115a2a115c2c115f2d11612f116331116533106734106936106b38106c390f6e3b0f703d0f713f0f72400f74420f75440f764510774710784910784a10794c117a4e117b4f127b51127c52137c54137d56147d57157e59157e5a167e5c167f5d177f5f187f601880621980641a80651a80671b80681c816a1c816b1d816d1d816e1e81701f81721f817320817521817621817822817922827b23827c23827e24828025828125818326818426818627818827818928818b29818c29818e2a81902a81912b81932b80942c80962c80982d80992d809b2e7f9c2e7f9e2f7fa02f7fa1307ea3307ea5317ea6317da8327daa337dab337cad347cae347bb0357bb2357bb3367ab5367ab73779b83779ba3878bc3978bd3977bf3a77c03a76c23b75c43c75c53c74c73d73c83e73ca3e72cc3f71cd4071cf4070d0416fd2426fd3436ed5446dd6456cd8456cd9466bdb476adc4869de4968df4a68e04c67e24d66e34e65e44f64e55064e75263e85362e95462ea5661eb5760ec5860ed5a5fee5b5eef5d5ef05f5ef1605df2625df2645cf3655cf4675cf4695cf56b5cf66c5cf66e5cf7705cf7725cf8745cf8765cf9785df9795df97b5dfa7d5efa7f5efa815ffb835ffb8560fb8761fc8961fc8a62fc8c63fc8e64fc9065fd9266fd9467fd9668fd9869fd9a6afd9b6bfe9d6cfe9f6dfea16efea36ffea571fea772fea973feaa74feac76feae77feb078feb27afeb47bfeb67cfeb77efeb97ffebb81febd82febf84fec185fec287fec488fec68afec88cfeca8dfecc8ffecd90fecf92fed194fed395fed597fed799fed89afdda9cfddc9efddea0fde0a1fde2a3fde3a5fde5a7fde7a9fde9aafdebacfcecaefceeb0fcf0b2fcf2b4fcf4b6fcf6b8fcf7b9fcf9bbfcfbbdfcfdbf"
      )
    ),
    db = sb(
      Xv(
        "00000401000501010601010802010a02020c02020e03021004031204031405041706041907051b08051d09061f0a07220b07240c08260d08290e092b10092d110a30120a32140b34150b37160b39180c3c190c3e1b0c411c0c431e0c451f0c48210c4a230c4c240c4f260c51280b53290b552b0b572d0b592f0a5b310a5c320a5e340a5f3609613809623909633b09643d09653e0966400a67420a68440a68450a69470b6a490b6a4a0c6b4c0c6b4d0d6c4f0d6c510e6c520e6d540f6d550f6d57106e59106e5a116e5c126e5d126e5f136e61136e62146e64156e65156e67166e69166e6a176e6c186e6d186e6f196e71196e721a6e741a6e751b6e771c6d781c6d7a1d6d7c1d6d7d1e6d7f1e6c801f6c82206c84206b85216b87216b88226a8a226a8c23698d23698f24699025689225689326679526679727669827669a28659b29649d29649f2a63a02a63a22b62a32c61a52c60a62d60a82e5fa92e5eab2f5ead305dae305cb0315bb1325ab3325ab43359b63458b73557b93556ba3655bc3754bd3853bf3952c03a51c13a50c33b4fc43c4ec63d4dc73e4cc83f4bca404acb4149cc4248ce4347cf4446d04545d24644d34743d44842d54a41d74b3fd84c3ed94d3dda4e3cdb503bdd513ade5238df5337e05536e15635e25734e35933e45a31e55c30e65d2fe75e2ee8602de9612bea632aeb6429eb6628ec6726ed6925ee6a24ef6c23ef6e21f06f20f1711ff1731df2741cf3761bf37819f47918f57b17f57d15f67e14f68013f78212f78410f8850ff8870ef8890cf98b0bf98c0af98e09fa9008fa9207fa9407fb9606fb9706fb9906fb9b06fb9d07fc9f07fca108fca309fca50afca60cfca80dfcaa0ffcac11fcae12fcb014fcb216fcb418fbb61afbb81dfbba1ffbbc21fbbe23fac026fac228fac42afac62df9c72ff9c932f9cb35f8cd37f8cf3af7d13df7d340f6d543f6d746f5d949f5db4cf4dd4ff4df53f4e156f3e35af3e55df2e661f2e865f2ea69f1ec6df1ed71f1ef75f1f179f2f27df2f482f3f586f3f68af4f88ef5f992f6fa96f8fb9af9fc9dfafda1fcffa4"
      )
    ),
    pb = sb(
      Xv(
        "0d088710078813078916078a19068c1b068d1d068e20068f2206902406912605912805922a05932c05942e05952f059631059733059735049837049938049a3a049a3c049b3e049c3f049c41049d43039e44039e46039f48039f4903a04b03a14c02a14e02a25002a25102a35302a35502a45601a45801a45901a55b01a55c01a65e01a66001a66100a76300a76400a76600a76700a86900a86a00a86c00a86e00a86f00a87100a87201a87401a87501a87701a87801a87a02a87b02a87d03a87e03a88004a88104a78305a78405a78606a68707a68808a68a09a58b0aa58d0ba58e0ca48f0da4910ea3920fa39410a29511a19613a19814a099159f9a169f9c179e9d189d9e199da01a9ca11b9ba21d9aa31e9aa51f99a62098a72197a82296aa2395ab2494ac2694ad2793ae2892b02991b12a90b22b8fb32c8eb42e8db52f8cb6308bb7318ab83289ba3388bb3488bc3587bd3786be3885bf3984c03a83c13b82c23c81c33d80c43e7fc5407ec6417dc7427cc8437bc9447aca457acb4679cc4778cc4977cd4a76ce4b75cf4c74d04d73d14e72d24f71d35171d45270d5536fd5546ed6556dd7566cd8576bd9586ada5a6ada5b69db5c68dc5d67dd5e66de5f65de6164df6263e06363e16462e26561e26660e3685fe4695ee56a5de56b5de66c5ce76e5be76f5ae87059e97158e97257ea7457eb7556eb7655ec7754ed7953ed7a52ee7b51ef7c51ef7e50f07f4ff0804ef1814df1834cf2844bf3854bf3874af48849f48948f58b47f58c46f68d45f68f44f79044f79143f79342f89441f89540f9973ff9983ef99a3efa9b3dfa9c3cfa9e3bfb9f3afba139fba238fca338fca537fca636fca835fca934fdab33fdac33fdae32fdaf31fdb130fdb22ffdb42ffdb52efeb72dfeb82cfeba2cfebb2bfebd2afebe2afec029fdc229fdc328fdc527fdc627fdc827fdca26fdcb26fccd25fcce25fcd025fcd225fbd324fbd524fbd724fad824fada24f9dc24f9dd25f8df25f8e125f7e225f7e425f6e626f6e826f5e926f5eb27f4ed27f3ee27f3f027f2f227f1f426f1f525f0f724f0f921"
      )
    );
  function gb(t) {
    return function () {
      return t;
    };
  }
  var yb = Math.abs,
    vb = Math.atan2,
    _b = Math.cos,
    bb = Math.max,
    mb = Math.min,
    xb = Math.sin,
    wb = Math.sqrt,
    Mb = 1e-12,
    Ab = Math.PI,
    Tb = Ab / 2,
    Sb = 2 * Ab;
  function Eb(t) {
    return t > 1 ? 0 : t < -1 ? Ab : Math.acos(t);
  }
  function kb(t) {
    return t >= 1 ? Tb : t <= -1 ? -Tb : Math.asin(t);
  }
  function Nb(t) {
    return t.innerRadius;
  }
  function Cb(t) {
    return t.outerRadius;
  }
  function Pb(t) {
    return t.startAngle;
  }
  function zb(t) {
    return t.endAngle;
  }
  function Db(t) {
    return t && t.padAngle;
  }
  function qb(t, n, e, r, i, o, a, u) {
    var c = e - t,
      f = r - n,
      s = a - i,
      l = u - o,
      h = l * c - s * f;
    if (!(h * h < Mb))
      return [t + (h = (s * (n - o) - l * (t - i)) / h) * c, n + h * f];
  }
  function Rb(t, n, e, r, i, o, a) {
    var u = t - e,
      c = n - r,
      f = (a ? o : -o) / wb(u * u + c * c),
      s = f * c,
      l = -f * u,
      h = t + s,
      d = n + l,
      p = e + s,
      g = r + l,
      y = (h + p) / 2,
      v = (d + g) / 2,
      _ = p - h,
      b = g - d,
      m = _ * _ + b * b,
      x = i - o,
      w = h * g - p * d,
      M = (b < 0 ? -1 : 1) * wb(bb(0, x * x * m - w * w)),
      A = (w * b - _ * M) / m,
      T = (-w * _ - b * M) / m,
      S = (w * b + _ * M) / m,
      E = (-w * _ + b * M) / m,
      k = A - y,
      N = T - v,
      C = S - y,
      P = E - v;
    return (
      k * k + N * N > C * C + P * P && ((A = S), (T = E)),
      {
        cx: A,
        cy: T,
        x01: -s,
        y01: -l,
        x11: A * (i / x - 1),
        y11: T * (i / x - 1),
      }
    );
  }
  var Fb = Array.prototype.slice;
  function Ob(t) {
    return "object" == typeof t && "length" in t ? t : Array.from(t);
  }
  function Ib(t) {
    this._context = t;
  }
  function Ub(t) {
    return new Ib(t);
  }
  function Bb(t) {
    return t[0];
  }
  function Yb(t) {
    return t[1];
  }
  function Lb(t, n) {
    var e = gb(!0),
      r = null,
      i = Ub,
      o = null;
    function a(a) {
      var u,
        c,
        f,
        s = (a = Ob(a)).length,
        l = !1;
      for (null == r && (o = i((f = pa()))), u = 0; u <= s; ++u)
        !(u < s && e((c = a[u]), u, a)) === l &&
          ((l = !l) ? o.lineStart() : o.lineEnd()),
          l && o.point(+t(c, u, a), +n(c, u, a));
      if (f) return (o = null), f + "" || null;
    }
    return (
      (t = "function" == typeof t ? t : void 0 === t ? Bb : gb(t)),
      (n = "function" == typeof n ? n : void 0 === n ? Yb : gb(n)),
      (a.x = function (n) {
        return arguments.length
          ? ((t = "function" == typeof n ? n : gb(+n)), a)
          : t;
      }),
      (a.y = function (t) {
        return arguments.length
          ? ((n = "function" == typeof t ? t : gb(+t)), a)
          : n;
      }),
      (a.defined = function (t) {
        return arguments.length
          ? ((e = "function" == typeof t ? t : gb(!!t)), a)
          : e;
      }),
      (a.curve = function (t) {
        return arguments.length ? ((i = t), null != r && (o = i(r)), a) : i;
      }),
      (a.context = function (t) {
        return arguments.length
          ? (null == t ? (r = o = null) : (o = i((r = t))), a)
          : r;
      }),
      a
    );
  }
  function jb(t, n, e) {
    var r = null,
      i = gb(!0),
      o = null,
      a = Ub,
      u = null;
    function c(c) {
      var f,
        s,
        l,
        h,
        d,
        p = (c = Ob(c)).length,
        g = !1,
        y = new Array(p),
        v = new Array(p);
      for (null == o && (u = a((d = pa()))), f = 0; f <= p; ++f) {
        if (!(f < p && i((h = c[f]), f, c)) === g)
          if ((g = !g)) (s = f), u.areaStart(), u.lineStart();
          else {
            for (u.lineEnd(), u.lineStart(), l = f - 1; l >= s; --l)
              u.point(y[l], v[l]);
            u.lineEnd(), u.areaEnd();
          }
        g &&
          ((y[f] = +t(h, f, c)),
          (v[f] = +n(h, f, c)),
          u.point(r ? +r(h, f, c) : y[f], e ? +e(h, f, c) : v[f]));
      }
      if (d) return (u = null), d + "" || null;
    }
    function f() {
      return Lb().defined(i).curve(a).context(o);
    }
    return (
      (t = "function" == typeof t ? t : void 0 === t ? Bb : gb(+t)),
      (n = "function" == typeof n ? n : gb(void 0 === n ? 0 : +n)),
      (e = "function" == typeof e ? e : void 0 === e ? Yb : gb(+e)),
      (c.x = function (n) {
        return arguments.length
          ? ((t = "function" == typeof n ? n : gb(+n)), (r = null), c)
          : t;
      }),
      (c.x0 = function (n) {
        return arguments.length
          ? ((t = "function" == typeof n ? n : gb(+n)), c)
          : t;
      }),
      (c.x1 = function (t) {
        return arguments.length
          ? ((r = null == t ? null : "function" == typeof t ? t : gb(+t)), c)
          : r;
      }),
      (c.y = function (t) {
        return arguments.length
          ? ((n = "function" == typeof t ? t : gb(+t)), (e = null), c)
          : n;
      }),
      (c.y0 = function (t) {
        return arguments.length
          ? ((n = "function" == typeof t ? t : gb(+t)), c)
          : n;
      }),
      (c.y1 = function (t) {
        return arguments.length
          ? ((e = null == t ? null : "function" == typeof t ? t : gb(+t)), c)
          : e;
      }),
      (c.lineX0 = c.lineY0 =
        function () {
          return f().x(t).y(n);
        }),
      (c.lineY1 = function () {
        return f().x(t).y(e);
      }),
      (c.lineX1 = function () {
        return f().x(r).y(n);
      }),
      (c.defined = function (t) {
        return arguments.length
          ? ((i = "function" == typeof t ? t : gb(!!t)), c)
          : i;
      }),
      (c.curve = function (t) {
        return arguments.length ? ((a = t), null != o && (u = a(o)), c) : a;
      }),
      (c.context = function (t) {
        return arguments.length
          ? (null == t ? (o = u = null) : (u = a((o = t))), c)
          : o;
      }),
      c
    );
  }
  function Hb(t, n) {
    return n < t ? -1 : n > t ? 1 : n >= t ? 0 : NaN;
  }
  function Xb(t) {
    return t;
  }
  Ib.prototype = {
    areaStart: function () {
      this._line = 0;
    },
    areaEnd: function () {
      this._line = NaN;
    },
    lineStart: function () {
      this._point = 0;
    },
    lineEnd: function () {
      (this._line || (0 !== this._line && 1 === this._point)) &&
        this._context.closePath(),
        (this._line = 1 - this._line);
    },
    point: function (t, n) {
      switch (((t = +t), (n = +n), this._point)) {
        case 0:
          (this._point = 1),
            this._line
              ? this._context.lineTo(t, n)
              : this._context.moveTo(t, n);
          break;
        case 1:
          this._point = 2;
        default:
          this._context.lineTo(t, n);
      }
    },
  };
  var Gb = $b(Ub);
  function Vb(t) {
    this._curve = t;
  }
  function $b(t) {
    function n(n) {
      return new Vb(t(n));
    }
    return (n._curve = t), n;
  }
  function Wb(t) {
    var n = t.curve;
    return (
      (t.angle = t.x),
      delete t.x,
      (t.radius = t.y),
      delete t.y,
      (t.curve = function (t) {
        return arguments.length ? n($b(t)) : n()._curve;
      }),
      t
    );
  }
  function Zb() {
    return Wb(Lb().curve(Gb));
  }
  function Kb() {
    var t = jb().curve(Gb),
      n = t.curve,
      e = t.lineX0,
      r = t.lineX1,
      i = t.lineY0,
      o = t.lineY1;
    return (
      (t.angle = t.x),
      delete t.x,
      (t.startAngle = t.x0),
      delete t.x0,
      (t.endAngle = t.x1),
      delete t.x1,
      (t.radius = t.y),
      delete t.y,
      (t.innerRadius = t.y0),
      delete t.y0,
      (t.outerRadius = t.y1),
      delete t.y1,
      (t.lineStartAngle = function () {
        return Wb(e());
      }),
      delete t.lineX0,
      (t.lineEndAngle = function () {
        return Wb(r());
      }),
      delete t.lineX1,
      (t.lineInnerRadius = function () {
        return Wb(i());
      }),
      delete t.lineY0,
      (t.lineOuterRadius = function () {
        return Wb(o());
      }),
      delete t.lineY1,
      (t.curve = function (t) {
        return arguments.length ? n($b(t)) : n()._curve;
      }),
      t
    );
  }
  function Qb(t, n) {
    return [(n = +n) * Math.cos((t -= Math.PI / 2)), n * Math.sin(t)];
  }
  function Jb(t) {
    return t.source;
  }
  function tm(t) {
    return t.target;
  }
  function nm(t) {
    var n = Jb,
      e = tm,
      r = Bb,
      i = Yb,
      o = null;
    function a() {
      var a,
        u = Fb.call(arguments),
        c = n.apply(this, u),
        f = e.apply(this, u);
      if (
        (o || (o = a = pa()),
        t(
          o,
          +r.apply(this, ((u[0] = c), u)),
          +i.apply(this, u),
          +r.apply(this, ((u[0] = f), u)),
          +i.apply(this, u)
        ),
        a)
      )
        return (o = null), a + "" || null;
    }
    return (
      (a.source = function (t) {
        return arguments.length ? ((n = t), a) : n;
      }),
      (a.target = function (t) {
        return arguments.length ? ((e = t), a) : e;
      }),
      (a.x = function (t) {
        return arguments.length
          ? ((r = "function" == typeof t ? t : gb(+t)), a)
          : r;
      }),
      (a.y = function (t) {
        return arguments.length
          ? ((i = "function" == typeof t ? t : gb(+t)), a)
          : i;
      }),
      (a.context = function (t) {
        return arguments.length ? ((o = null == t ? null : t), a) : o;
      }),
      a
    );
  }
  function em(t, n, e, r, i) {
    t.moveTo(n, e), t.bezierCurveTo((n = (n + r) / 2), e, n, i, r, i);
  }
  function rm(t, n, e, r, i) {
    t.moveTo(n, e), t.bezierCurveTo(n, (e = (e + i) / 2), r, e, r, i);
  }
  function im(t, n, e, r, i) {
    var o = Qb(n, e),
      a = Qb(n, (e = (e + i) / 2)),
      u = Qb(r, e),
      c = Qb(r, i);
    t.moveTo(o[0], o[1]), t.bezierCurveTo(a[0], a[1], u[0], u[1], c[0], c[1]);
  }
  Vb.prototype = {
    areaStart: function () {
      this._curve.areaStart();
    },
    areaEnd: function () {
      this._curve.areaEnd();
    },
    lineStart: function () {
      this._curve.lineStart();
    },
    lineEnd: function () {
      this._curve.lineEnd();
    },
    point: function (t, n) {
      this._curve.point(n * Math.sin(t), n * -Math.cos(t));
    },
  };
  var om = {
      draw: function (t, n) {
        var e = Math.sqrt(n / Ab);
        t.moveTo(e, 0), t.arc(0, 0, e, 0, Sb);
      },
    },
    am = {
      draw: function (t, n) {
        var e = Math.sqrt(n / 5) / 2;
        t.moveTo(-3 * e, -e),
          t.lineTo(-e, -e),
          t.lineTo(-e, -3 * e),
          t.lineTo(e, -3 * e),
          t.lineTo(e, -e),
          t.lineTo(3 * e, -e),
          t.lineTo(3 * e, e),
          t.lineTo(e, e),
          t.lineTo(e, 3 * e),
          t.lineTo(-e, 3 * e),
          t.lineTo(-e, e),
          t.lineTo(-3 * e, e),
          t.closePath();
      },
    },
    um = Math.sqrt(1 / 3),
    cm = 2 * um,
    fm = {
      draw: function (t, n) {
        var e = Math.sqrt(n / cm),
          r = e * um;
        t.moveTo(0, -e),
          t.lineTo(r, 0),
          t.lineTo(0, e),
          t.lineTo(-r, 0),
          t.closePath();
      },
    },
    sm = Math.sin(Ab / 10) / Math.sin((7 * Ab) / 10),
    lm = Math.sin(Sb / 10) * sm,
    hm = -Math.cos(Sb / 10) * sm,
    dm = {
      draw: function (t, n) {
        var e = Math.sqrt(0.8908130915292852 * n),
          r = lm * e,
          i = hm * e;
        t.moveTo(0, -e), t.lineTo(r, i);
        for (var o = 1; o < 5; ++o) {
          var a = (Sb * o) / 5,
            u = Math.cos(a),
            c = Math.sin(a);
          t.lineTo(c * e, -u * e), t.lineTo(u * r - c * i, c * r + u * i);
        }
        t.closePath();
      },
    },
    pm = {
      draw: function (t, n) {
        var e = Math.sqrt(n),
          r = -e / 2;
        t.rect(r, r, e, e);
      },
    },
    gm = Math.sqrt(3),
    ym = {
      draw: function (t, n) {
        var e = -Math.sqrt(n / (3 * gm));
        t.moveTo(0, 2 * e),
          t.lineTo(-gm * e, -e),
          t.lineTo(gm * e, -e),
          t.closePath();
      },
    },
    vm = -0.5,
    _m = Math.sqrt(3) / 2,
    bm = 1 / Math.sqrt(12),
    mm = 3 * (bm / 2 + 1),
    xm = {
      draw: function (t, n) {
        var e = Math.sqrt(n / mm),
          r = e / 2,
          i = e * bm,
          o = r,
          a = e * bm + e,
          u = -o,
          c = a;
        t.moveTo(r, i),
          t.lineTo(o, a),
          t.lineTo(u, c),
          t.lineTo(vm * r - _m * i, _m * r + vm * i),
          t.lineTo(vm * o - _m * a, _m * o + vm * a),
          t.lineTo(vm * u - _m * c, _m * u + vm * c),
          t.lineTo(vm * r + _m * i, vm * i - _m * r),
          t.lineTo(vm * o + _m * a, vm * a - _m * o),
          t.lineTo(vm * u + _m * c, vm * c - _m * u),
          t.closePath();
      },
    },
    wm = [om, am, fm, pm, dm, ym, xm];
  function Mm() {}
  function Am(t, n, e) {
    t._context.bezierCurveTo(
      (2 * t._x0 + t._x1) / 3,
      (2 * t._y0 + t._y1) / 3,
      (t._x0 + 2 * t._x1) / 3,
      (t._y0 + 2 * t._y1) / 3,
      (t._x0 + 4 * t._x1 + n) / 6,
      (t._y0 + 4 * t._y1 + e) / 6
    );
  }
  function Tm(t) {
    this._context = t;
  }
  function Sm(t) {
    this._context = t;
  }
  function Em(t) {
    this._context = t;
  }
  (Tm.prototype = {
    areaStart: function () {
      this._line = 0;
    },
    areaEnd: function () {
      this._line = NaN;
    },
    lineStart: function () {
      (this._x0 = this._x1 = this._y0 = this._y1 = NaN), (this._point = 0);
    },
    lineEnd: function () {
      switch (this._point) {
        case 3:
          Am(this, this._x1, this._y1);
        case 2:
          this._context.lineTo(this._x1, this._y1);
      }
      (this._line || (0 !== this._line && 1 === this._point)) &&
        this._context.closePath(),
        (this._line = 1 - this._line);
    },
    point: function (t, n) {
      switch (((t = +t), (n = +n), this._point)) {
        case 0:
          (this._point = 1),
            this._line
              ? this._context.lineTo(t, n)
              : this._context.moveTo(t, n);
          break;
        case 1:
          this._point = 2;
          break;
        case 2:
          (this._point = 3),
            this._context.lineTo(
              (5 * this._x0 + this._x1) / 6,
              (5 * this._y0 + this._y1) / 6
            );
        default:
          Am(this, t, n);
      }
      (this._x0 = this._x1),
        (this._x1 = t),
        (this._y0 = this._y1),
        (this._y1 = n);
    },
  }),
    (Sm.prototype = {
      areaStart: Mm,
      areaEnd: Mm,
      lineStart: function () {
        (this._x0 =
          this._x1 =
          this._x2 =
          this._x3 =
          this._x4 =
          this._y0 =
          this._y1 =
          this._y2 =
          this._y3 =
          this._y4 =
            NaN),
          (this._point = 0);
      },
      lineEnd: function () {
        switch (this._point) {
          case 1:
            this._context.moveTo(this._x2, this._y2), this._context.closePath();
            break;
          case 2:
            this._context.moveTo(
              (this._x2 + 2 * this._x3) / 3,
              (this._y2 + 2 * this._y3) / 3
            ),
              this._context.lineTo(
                (this._x3 + 2 * this._x2) / 3,
                (this._y3 + 2 * this._y2) / 3
              ),
              this._context.closePath();
            break;
          case 3:
            this.point(this._x2, this._y2),
              this.point(this._x3, this._y3),
              this.point(this._x4, this._y4);
        }
      },
      point: function (t, n) {
        switch (((t = +t), (n = +n), this._point)) {
          case 0:
            (this._point = 1), (this._x2 = t), (this._y2 = n);
            break;
          case 1:
            (this._point = 2), (this._x3 = t), (this._y3 = n);
            break;
          case 2:
            (this._point = 3),
              (this._x4 = t),
              (this._y4 = n),
              this._context.moveTo(
                (this._x0 + 4 * this._x1 + t) / 6,
                (this._y0 + 4 * this._y1 + n) / 6
              );
            break;
          default:
            Am(this, t, n);
        }
        (this._x0 = this._x1),
          (this._x1 = t),
          (this._y0 = this._y1),
          (this._y1 = n);
      },
    }),
    (Em.prototype = {
      areaStart: function () {
        this._line = 0;
      },
      areaEnd: function () {
        this._line = NaN;
      },
      lineStart: function () {
        (this._x0 = this._x1 = this._y0 = this._y1 = NaN), (this._point = 0);
      },
      lineEnd: function () {
        (this._line || (0 !== this._line && 3 === this._point)) &&
          this._context.closePath(),
          (this._line = 1 - this._line);
      },
      point: function (t, n) {
        switch (((t = +t), (n = +n), this._point)) {
          case 0:
            this._point = 1;
            break;
          case 1:
            this._point = 2;
            break;
          case 2:
            this._point = 3;
            var e = (this._x0 + 4 * this._x1 + t) / 6,
              r = (this._y0 + 4 * this._y1 + n) / 6;
            this._line
              ? this._context.lineTo(e, r)
              : this._context.moveTo(e, r);
            break;
          case 3:
            this._point = 4;
          default:
            Am(this, t, n);
        }
        (this._x0 = this._x1),
          (this._x1 = t),
          (this._y0 = this._y1),
          (this._y1 = n);
      },
    });
  class km {
    constructor(t, n) {
      (this._context = t), (this._x = n);
    }
    areaStart() {
      this._line = 0;
    }
    areaEnd() {
      this._line = NaN;
    }
    lineStart() {
      this._point = 0;
    }
    lineEnd() {
      (this._line || (0 !== this._line && 1 === this._point)) &&
        this._context.closePath(),
        (this._line = 1 - this._line);
    }
    point(t, n) {
      switch (((t = +t), (n = +n), this._point)) {
        case 0:
          (this._point = 1),
            this._line
              ? this._context.lineTo(t, n)
              : this._context.moveTo(t, n);
          break;
        case 1:
          this._point = 2;
        default:
          this._x
            ? this._context.bezierCurveTo(
                (this._x0 = (this._x0 + t) / 2),
                this._y0,
                this._x0,
                n,
                t,
                n
              )
            : this._context.bezierCurveTo(
                this._x0,
                (this._y0 = (this._y0 + n) / 2),
                t,
                this._y0,
                t,
                n
              );
      }
      (this._x0 = t), (this._y0 = n);
    }
  }
  function Nm(t, n) {
    (this._basis = new Tm(t)), (this._beta = n);
  }
  Nm.prototype = {
    lineStart: function () {
      (this._x = []), (this._y = []), this._basis.lineStart();
    },
    lineEnd: function () {
      var t = this._x,
        n = this._y,
        e = t.length - 1;
      if (e > 0)
        for (
          var r, i = t[0], o = n[0], a = t[e] - i, u = n[e] - o, c = -1;
          ++c <= e;

        )
          (r = c / e),
            this._basis.point(
              this._beta * t[c] + (1 - this._beta) * (i + r * a),
              this._beta * n[c] + (1 - this._beta) * (o + r * u)
            );
      (this._x = this._y = null), this._basis.lineEnd();
    },
    point: function (t, n) {
      this._x.push(+t), this._y.push(+n);
    },
  };
  var Cm = (function t(n) {
    function e(t) {
      return 1 === n ? new Tm(t) : new Nm(t, n);
    }
    return (
      (e.beta = function (n) {
        return t(+n);
      }),
      e
    );
  })(0.85);
  function Pm(t, n, e) {
    t._context.bezierCurveTo(
      t._x1 + t._k * (t._x2 - t._x0),
      t._y1 + t._k * (t._y2 - t._y0),
      t._x2 + t._k * (t._x1 - n),
      t._y2 + t._k * (t._y1 - e),
      t._x2,
      t._y2
    );
  }
  function zm(t, n) {
    (this._context = t), (this._k = (1 - n) / 6);
  }
  zm.prototype = {
    areaStart: function () {
      this._line = 0;
    },
    areaEnd: function () {
      this._line = NaN;
    },
    lineStart: function () {
      (this._x0 = this._x1 = this._x2 = this._y0 = this._y1 = this._y2 = NaN),
        (this._point = 0);
    },
    lineEnd: function () {
      switch (this._point) {
        case 2:
          this._context.lineTo(this._x2, this._y2);
          break;
        case 3:
          Pm(this, this._x1, this._y1);
      }
      (this._line || (0 !== this._line && 1 === this._point)) &&
        this._context.closePath(),
        (this._line = 1 - this._line);
    },
    point: function (t, n) {
      switch (((t = +t), (n = +n), this._point)) {
        case 0:
          (this._point = 1),
            this._line
              ? this._context.lineTo(t, n)
              : this._context.moveTo(t, n);
          break;
        case 1:
          (this._point = 2), (this._x1 = t), (this._y1 = n);
          break;
        case 2:
          this._point = 3;
        default:
          Pm(this, t, n);
      }
      (this._x0 = this._x1),
        (this._x1 = this._x2),
        (this._x2 = t),
        (this._y0 = this._y1),
        (this._y1 = this._y2),
        (this._y2 = n);
    },
  };
  var Dm = (function t(n) {
    function e(t) {
      return new zm(t, n);
    }
    return (
      (e.tension = function (n) {
        return t(+n);
      }),
      e
    );
  })(0);
  function qm(t, n) {
    (this._context = t), (this._k = (1 - n) / 6);
  }
  qm.prototype = {
    areaStart: Mm,
    areaEnd: Mm,
    lineStart: function () {
      (this._x0 =
        this._x1 =
        this._x2 =
        this._x3 =
        this._x4 =
        this._x5 =
        this._y0 =
        this._y1 =
        this._y2 =
        this._y3 =
        this._y4 =
        this._y5 =
          NaN),
        (this._point = 0);
    },
    lineEnd: function () {
      switch (this._point) {
        case 1:
          this._context.moveTo(this._x3, this._y3), this._context.closePath();
          break;
        case 2:
          this._context.lineTo(this._x3, this._y3), this._context.closePath();
          break;
        case 3:
          this.point(this._x3, this._y3),
            this.point(this._x4, this._y4),
            this.point(this._x5, this._y5);
      }
    },
    point: function (t, n) {
      switch (((t = +t), (n = +n), this._point)) {
        case 0:
          (this._point = 1), (this._x3 = t), (this._y3 = n);
          break;
        case 1:
          (this._point = 2),
            this._context.moveTo((this._x4 = t), (this._y4 = n));
          break;
        case 2:
          (this._point = 3), (this._x5 = t), (this._y5 = n);
          break;
        default:
          Pm(this, t, n);
      }
      (this._x0 = this._x1),
        (this._x1 = this._x2),
        (this._x2 = t),
        (this._y0 = this._y1),
        (this._y1 = this._y2),
        (this._y2 = n);
    },
  };
  var Rm = (function t(n) {
    function e(t) {
      return new qm(t, n);
    }
    return (
      (e.tension = function (n) {
        return t(+n);
      }),
      e
    );
  })(0);
  function Fm(t, n) {
    (this._context = t), (this._k = (1 - n) / 6);
  }
  Fm.prototype = {
    areaStart: function () {
      this._line = 0;
    },
    areaEnd: function () {
      this._line = NaN;
    },
    lineStart: function () {
      (this._x0 = this._x1 = this._x2 = this._y0 = this._y1 = this._y2 = NaN),
        (this._point = 0);
    },
    lineEnd: function () {
      (this._line || (0 !== this._line && 3 === this._point)) &&
        this._context.closePath(),
        (this._line = 1 - this._line);
    },
    point: function (t, n) {
      switch (((t = +t), (n = +n), this._point)) {
        case 0:
          this._point = 1;
          break;
        case 1:
          this._point = 2;
          break;
        case 2:
          (this._point = 3),
            this._line
              ? this._context.lineTo(this._x2, this._y2)
              : this._context.moveTo(this._x2, this._y2);
          break;
        case 3:
          this._point = 4;
        default:
          Pm(this, t, n);
      }
      (this._x0 = this._x1),
        (this._x1 = this._x2),
        (this._x2 = t),
        (this._y0 = this._y1),
        (this._y1 = this._y2),
        (this._y2 = n);
    },
  };
  var Om = (function t(n) {
    function e(t) {
      return new Fm(t, n);
    }
    return (
      (e.tension = function (n) {
        return t(+n);
      }),
      e
    );
  })(0);
  function Im(t, n, e) {
    var r = t._x1,
      i = t._y1,
      o = t._x2,
      a = t._y2;
    if (t._l01_a > Mb) {
      var u = 2 * t._l01_2a + 3 * t._l01_a * t._l12_a + t._l12_2a,
        c = 3 * t._l01_a * (t._l01_a + t._l12_a);
      (r = (r * u - t._x0 * t._l12_2a + t._x2 * t._l01_2a) / c),
        (i = (i * u - t._y0 * t._l12_2a + t._y2 * t._l01_2a) / c);
    }
    if (t._l23_a > Mb) {
      var f = 2 * t._l23_2a + 3 * t._l23_a * t._l12_a + t._l12_2a,
        s = 3 * t._l23_a * (t._l23_a + t._l12_a);
      (o = (o * f + t._x1 * t._l23_2a - n * t._l12_2a) / s),
        (a = (a * f + t._y1 * t._l23_2a - e * t._l12_2a) / s);
    }
    t._context.bezierCurveTo(r, i, o, a, t._x2, t._y2);
  }
  function Um(t, n) {
    (this._context = t), (this._alpha = n);
  }
  Um.prototype = {
    areaStart: function () {
      this._line = 0;
    },
    areaEnd: function () {
      this._line = NaN;
    },
    lineStart: function () {
      (this._x0 = this._x1 = this._x2 = this._y0 = this._y1 = this._y2 = NaN),
        (this._l01_a =
          this._l12_a =
          this._l23_a =
          this._l01_2a =
          this._l12_2a =
          this._l23_2a =
          this._point =
            0);
    },
    lineEnd: function () {
      switch (this._point) {
        case 2:
          this._context.lineTo(this._x2, this._y2);
          break;
        case 3:
          this.point(this._x2, this._y2);
      }
      (this._line || (0 !== this._line && 1 === this._point)) &&
        this._context.closePath(),
        (this._line = 1 - this._line);
    },
    point: function (t, n) {
      if (((t = +t), (n = +n), this._point)) {
        var e = this._x2 - t,
          r = this._y2 - n;
        this._l23_a = Math.sqrt(
          (this._l23_2a = Math.pow(e * e + r * r, this._alpha))
        );
      }
      switch (this._point) {
        case 0:
          (this._point = 1),
            this._line
              ? this._context.lineTo(t, n)
              : this._context.moveTo(t, n);
          break;
        case 1:
          this._point = 2;
          break;
        case 2:
          this._point = 3;
        default:
          Im(this, t, n);
      }
      (this._l01_a = this._l12_a),
        (this._l12_a = this._l23_a),
        (this._l01_2a = this._l12_2a),
        (this._l12_2a = this._l23_2a),
        (this._x0 = this._x1),
        (this._x1 = this._x2),
        (this._x2 = t),
        (this._y0 = this._y1),
        (this._y1 = this._y2),
        (this._y2 = n);
    },
  };
  var Bm = (function t(n) {
    function e(t) {
      return n ? new Um(t, n) : new zm(t, 0);
    }
    return (
      (e.alpha = function (n) {
        return t(+n);
      }),
      e
    );
  })(0.5);
  function Ym(t, n) {
    (this._context = t), (this._alpha = n);
  }
  Ym.prototype = {
    areaStart: Mm,
    areaEnd: Mm,
    lineStart: function () {
      (this._x0 =
        this._x1 =
        this._x2 =
        this._x3 =
        this._x4 =
        this._x5 =
        this._y0 =
        this._y1 =
        this._y2 =
        this._y3 =
        this._y4 =
        this._y5 =
          NaN),
        (this._l01_a =
          this._l12_a =
          this._l23_a =
          this._l01_2a =
          this._l12_2a =
          this._l23_2a =
          this._point =
            0);
    },
    lineEnd: function () {
      switch (this._point) {
        case 1:
          this._context.moveTo(this._x3, this._y3), this._context.closePath();
          break;
        case 2:
          this._context.lineTo(this._x3, this._y3), this._context.closePath();
          break;
        case 3:
          this.point(this._x3, this._y3),
            this.point(this._x4, this._y4),
            this.point(this._x5, this._y5);
      }
    },
    point: function (t, n) {
      if (((t = +t), (n = +n), this._point)) {
        var e = this._x2 - t,
          r = this._y2 - n;
        this._l23_a = Math.sqrt(
          (this._l23_2a = Math.pow(e * e + r * r, this._alpha))
        );
      }
      switch (this._point) {
        case 0:
          (this._point = 1), (this._x3 = t), (this._y3 = n);
          break;
        case 1:
          (this._point = 2),
            this._context.moveTo((this._x4 = t), (this._y4 = n));
          break;
        case 2:
          (this._point = 3), (this._x5 = t), (this._y5 = n);
          break;
        default:
          Im(this, t, n);
      }
      (this._l01_a = this._l12_a),
        (this._l12_a = this._l23_a),
        (this._l01_2a = this._l12_2a),
        (this._l12_2a = this._l23_2a),
        (this._x0 = this._x1),
        (this._x1 = this._x2),
        (this._x2 = t),
        (this._y0 = this._y1),
        (this._y1 = this._y2),
        (this._y2 = n);
    },
  };
  var Lm = (function t(n) {
    function e(t) {
      return n ? new Ym(t, n) : new qm(t, 0);
    }
    return (
      (e.alpha = function (n) {
        return t(+n);
      }),
      e
    );
  })(0.5);
  function jm(t, n) {
    (this._context = t), (this._alpha = n);
  }
  jm.prototype = {
    areaStart: function () {
      this._line = 0;
    },
    areaEnd: function () {
      this._line = NaN;
    },
    lineStart: function () {
      (this._x0 = this._x1 = this._x2 = this._y0 = this._y1 = this._y2 = NaN),
        (this._l01_a =
          this._l12_a =
          this._l23_a =
          this._l01_2a =
          this._l12_2a =
          this._l23_2a =
          this._point =
            0);
    },
    lineEnd: function () {
      (this._line || (0 !== this._line && 3 === this._point)) &&
        this._context.closePath(),
        (this._line = 1 - this._line);
    },
    point: function (t, n) {
      if (((t = +t), (n = +n), this._point)) {
        var e = this._x2 - t,
          r = this._y2 - n;
        this._l23_a = Math.sqrt(
          (this._l23_2a = Math.pow(e * e + r * r, this._alpha))
        );
      }
      switch (this._point) {
        case 0:
          this._point = 1;
          break;
        case 1:
          this._point = 2;
          break;
        case 2:
          (this._point = 3),
            this._line
              ? this._context.lineTo(this._x2, this._y2)
              : this._context.moveTo(this._x2, this._y2);
          break;
        case 3:
          this._point = 4;
        default:
          Im(this, t, n);
      }
      (this._l01_a = this._l12_a),
        (this._l12_a = this._l23_a),
        (this._l01_2a = this._l12_2a),
        (this._l12_2a = this._l23_2a),
        (this._x0 = this._x1),
        (this._x1 = this._x2),
        (this._x2 = t),
        (this._y0 = this._y1),
        (this._y1 = this._y2),
        (this._y2 = n);
    },
  };
  var Hm = (function t(n) {
    function e(t) {
      return n ? new jm(t, n) : new Fm(t, 0);
    }
    return (
      (e.alpha = function (n) {
        return t(+n);
      }),
      e
    );
  })(0.5);
  function Xm(t) {
    this._context = t;
  }
  function Gm(t) {
    return t < 0 ? -1 : 1;
  }
  function Vm(t, n, e) {
    var r = t._x1 - t._x0,
      i = n - t._x1,
      o = (t._y1 - t._y0) / (r || (i < 0 && -0)),
      a = (e - t._y1) / (i || (r < 0 && -0)),
      u = (o * i + a * r) / (r + i);
    return (
      (Gm(o) + Gm(a)) * Math.min(Math.abs(o), Math.abs(a), 0.5 * Math.abs(u)) ||
      0
    );
  }
  function $m(t, n) {
    var e = t._x1 - t._x0;
    return e ? ((3 * (t._y1 - t._y0)) / e - n) / 2 : n;
  }
  function Wm(t, n, e) {
    var r = t._x0,
      i = t._y0,
      o = t._x1,
      a = t._y1,
      u = (o - r) / 3;
    t._context.bezierCurveTo(r + u, i + u * n, o - u, a - u * e, o, a);
  }
  function Zm(t) {
    this._context = t;
  }
  function Km(t) {
    this._context = new Qm(t);
  }
  function Qm(t) {
    this._context = t;
  }
  function Jm(t) {
    this._context = t;
  }
  function tx(t) {
    var n,
      e,
      r = t.length - 1,
      i = new Array(r),
      o = new Array(r),
      a = new Array(r);
    for (i[0] = 0, o[0] = 2, a[0] = t[0] + 2 * t[1], n = 1; n < r - 1; ++n)
      (i[n] = 1), (o[n] = 4), (a[n] = 4 * t[n] + 2 * t[n + 1]);
    for (
      i[r - 1] = 2, o[r - 1] = 7, a[r - 1] = 8 * t[r - 1] + t[r], n = 1;
      n < r;
      ++n
    )
      (e = i[n] / o[n - 1]), (o[n] -= e), (a[n] -= e * a[n - 1]);
    for (i[r - 1] = a[r - 1] / o[r - 1], n = r - 2; n >= 0; --n)
      i[n] = (a[n] - i[n + 1]) / o[n];
    for (o[r - 1] = (t[r] + i[r - 1]) / 2, n = 0; n < r - 1; ++n)
      o[n] = 2 * t[n + 1] - i[n + 1];
    return [i, o];
  }
  function nx(t, n) {
    (this._context = t), (this._t = n);
  }
  function ex(t, n) {
    if ((i = t.length) > 1)
      for (var e, r, i, o = 1, a = t[n[0]], u = a.length; o < i; ++o)
        for (r = a, a = t[n[o]], e = 0; e < u; ++e)
          a[e][1] += a[e][0] = isNaN(r[e][1]) ? r[e][0] : r[e][1];
  }
  function rx(t) {
    for (var n = t.length, e = new Array(n); --n >= 0; ) e[n] = n;
    return e;
  }
  function ix(t, n) {
    return t[n];
  }
  function ox(t) {
    const n = [];
    return (n.key = t), n;
  }
  function ax(t) {
    var n = t.map(ux);
    return rx(t).sort(function (t, e) {
      return n[t] - n[e];
    });
  }
  function ux(t) {
    for (var n, e = -1, r = 0, i = t.length, o = -1 / 0; ++e < i; )
      (n = +t[e][1]) > o && ((o = n), (r = e));
    return r;
  }
  function cx(t) {
    var n = t.map(fx);
    return rx(t).sort(function (t, e) {
      return n[t] - n[e];
    });
  }
  function fx(t) {
    for (var n, e = 0, r = -1, i = t.length; ++r < i; )
      (n = +t[r][1]) && (e += n);
    return e;
  }
  (Xm.prototype = {
    areaStart: Mm,
    areaEnd: Mm,
    lineStart: function () {
      this._point = 0;
    },
    lineEnd: function () {
      this._point && this._context.closePath();
    },
    point: function (t, n) {
      (t = +t),
        (n = +n),
        this._point
          ? this._context.lineTo(t, n)
          : ((this._point = 1), this._context.moveTo(t, n));
    },
  }),
    (Zm.prototype = {
      areaStart: function () {
        this._line = 0;
      },
      areaEnd: function () {
        this._line = NaN;
      },
      lineStart: function () {
        (this._x0 = this._x1 = this._y0 = this._y1 = this._t0 = NaN),
          (this._point = 0);
      },
      lineEnd: function () {
        switch (this._point) {
          case 2:
            this._context.lineTo(this._x1, this._y1);
            break;
          case 3:
            Wm(this, this._t0, $m(this, this._t0));
        }
        (this._line || (0 !== this._line && 1 === this._point)) &&
          this._context.closePath(),
          (this._line = 1 - this._line);
      },
      point: function (t, n) {
        var e = NaN;
        if (((n = +n), (t = +t) !== this._x1 || n !== this._y1)) {
          switch (this._point) {
            case 0:
              (this._point = 1),
                this._line
                  ? this._context.lineTo(t, n)
                  : this._context.moveTo(t, n);
              break;
            case 1:
              this._point = 2;
              break;
            case 2:
              (this._point = 3), Wm(this, $m(this, (e = Vm(this, t, n))), e);
              break;
            default:
              Wm(this, this._t0, (e = Vm(this, t, n)));
          }
          (this._x0 = this._x1),
            (this._x1 = t),
            (this._y0 = this._y1),
            (this._y1 = n),
            (this._t0 = e);
        }
      },
    }),
    ((Km.prototype = Object.create(Zm.prototype)).point = function (t, n) {
      Zm.prototype.point.call(this, n, t);
    }),
    (Qm.prototype = {
      moveTo: function (t, n) {
        this._context.moveTo(n, t);
      },
      closePath: function () {
        this._context.closePath();
      },
      lineTo: function (t, n) {
        this._context.lineTo(n, t);
      },
      bezierCurveTo: function (t, n, e, r, i, o) {
        this._context.bezierCurveTo(n, t, r, e, o, i);
      },
    }),
    (Jm.prototype = {
      areaStart: function () {
        this._line = 0;
      },
      areaEnd: function () {
        this._line = NaN;
      },
      lineStart: function () {
        (this._x = []), (this._y = []);
      },
      lineEnd: function () {
        var t = this._x,
          n = this._y,
          e = t.length;
        if (e)
          if (
            (this._line
              ? this._context.lineTo(t[0], n[0])
              : this._context.moveTo(t[0], n[0]),
            2 === e)
          )
            this._context.lineTo(t[1], n[1]);
          else
            for (var r = tx(t), i = tx(n), o = 0, a = 1; a < e; ++o, ++a)
              this._context.bezierCurveTo(
                r[0][o],
                i[0][o],
                r[1][o],
                i[1][o],
                t[a],
                n[a]
              );
        (this._line || (0 !== this._line && 1 === e)) &&
          this._context.closePath(),
          (this._line = 1 - this._line),
          (this._x = this._y = null);
      },
      point: function (t, n) {
        this._x.push(+t), this._y.push(+n);
      },
    }),
    (nx.prototype = {
      areaStart: function () {
        this._line = 0;
      },
      areaEnd: function () {
        this._line = NaN;
      },
      lineStart: function () {
        (this._x = this._y = NaN), (this._point = 0);
      },
      lineEnd: function () {
        0 < this._t &&
          this._t < 1 &&
          2 === this._point &&
          this._context.lineTo(this._x, this._y),
          (this._line || (0 !== this._line && 1 === this._point)) &&
            this._context.closePath(),
          this._line >= 0 &&
            ((this._t = 1 - this._t), (this._line = 1 - this._line));
      },
      point: function (t, n) {
        switch (((t = +t), (n = +n), this._point)) {
          case 0:
            (this._point = 1),
              this._line
                ? this._context.lineTo(t, n)
                : this._context.moveTo(t, n);
            break;
          case 1:
            this._point = 2;
          default:
            if (this._t <= 0)
              this._context.lineTo(this._x, n), this._context.lineTo(t, n);
            else {
              var e = this._x * (1 - this._t) + t * this._t;
              this._context.lineTo(e, this._y), this._context.lineTo(e, n);
            }
        }
        (this._x = t), (this._y = n);
      },
    });
  var sx = (t) => () => t;
  function lx(t, { sourceEvent: n, target: e, transform: r, dispatch: i }) {
    Object.defineProperties(this, {
      type: { value: t, enumerable: !0, configurable: !0 },
      sourceEvent: { value: n, enumerable: !0, configurable: !0 },
      target: { value: e, enumerable: !0, configurable: !0 },
      transform: { value: r, enumerable: !0, configurable: !0 },
      _: { value: i },
    });
  }
  function hx(t, n, e) {
    (this.k = t), (this.x = n), (this.y = e);
  }
  hx.prototype = {
    constructor: hx,
    scale: function (t) {
      return 1 === t ? this : new hx(this.k * t, this.x, this.y);
    },
    translate: function (t, n) {
      return (0 === t) & (0 === n)
        ? this
        : new hx(this.k, this.x + this.k * t, this.y + this.k * n);
    },
    apply: function (t) {
      return [t[0] * this.k + this.x, t[1] * this.k + this.y];
    },
    applyX: function (t) {
      return t * this.k + this.x;
    },
    applyY: function (t) {
      return t * this.k + this.y;
    },
    invert: function (t) {
      return [(t[0] - this.x) / this.k, (t[1] - this.y) / this.k];
    },
    invertX: function (t) {
      return (t - this.x) / this.k;
    },
    invertY: function (t) {
      return (t - this.y) / this.k;
    },
    rescaleX: function (t) {
      return t
        .copy()
        .domain(t.range().map(this.invertX, this).map(t.invert, t));
    },
    rescaleY: function (t) {
      return t
        .copy()
        .domain(t.range().map(this.invertY, this).map(t.invert, t));
    },
    toString: function () {
      return "translate(" + this.x + "," + this.y + ") scale(" + this.k + ")";
    },
  };
  var dx = new hx(1, 0, 0);
  function px(t) {
    for (; !t.__zoom; ) if (!(t = t.parentNode)) return dx;
    return t.__zoom;
  }
  function gx(t) {
    t.stopImmediatePropagation();
  }
  function yx(t) {
    t.preventDefault(), t.stopImmediatePropagation();
  }
  function vx(t) {
    return !((t.ctrlKey && "wheel" !== t.type) || t.button);
  }
  function _x() {
    var t = this;
    return t instanceof SVGElement
      ? (t = t.ownerSVGElement || t).hasAttribute("viewBox")
        ? [
            [(t = t.viewBox.baseVal).x, t.y],
            [t.x + t.width, t.y + t.height],
          ]
        : [
            [0, 0],
            [t.width.baseVal.value, t.height.baseVal.value],
          ]
      : [
          [0, 0],
          [t.clientWidth, t.clientHeight],
        ];
  }
  function bx() {
    return this.__zoom || dx;
  }
  function mx(t) {
    return (
      -t.deltaY *
      (1 === t.deltaMode ? 0.05 : t.deltaMode ? 1 : 0.002) *
      (t.ctrlKey ? 10 : 1)
    );
  }
  function xx() {
    return navigator.maxTouchPoints || "ontouchstart" in this;
  }
  function wx(t, n, e) {
    var r = t.invertX(n[0][0]) - e[0][0],
      i = t.invertX(n[1][0]) - e[1][0],
      o = t.invertY(n[0][1]) - e[0][1],
      a = t.invertY(n[1][1]) - e[1][1];
    return t.translate(
      i > r ? (r + i) / 2 : Math.min(0, r) || Math.max(0, i),
      a > o ? (o + a) / 2 : Math.min(0, o) || Math.max(0, a)
    );
  }
  (px.prototype = hx.prototype),
    (t.Adder = g),
    (t.Delaunay = du),
    (t.FormatSpecifier = bc),
    (t.InternMap = y),
    (t.InternSet = v),
    (t.Node = cd),
    (t.Voronoi = uu),
    (t.ZoomTransform = hx),
    (t.active = function (t, n) {
      var e,
        r,
        i = t.__transition;
      if (i)
        for (r in ((n = null == n ? null : n + ""), i))
          if ((e = i[r]).state > 1 && e.name === n)
            return new $i([[t]], Mo, n, +r);
      return null;
    }),
    (t.arc = function () {
      var t = Nb,
        n = Cb,
        e = gb(0),
        r = null,
        i = Pb,
        o = zb,
        a = Db,
        u = null;
      function c() {
        var c,
          f,
          s = +t.apply(this, arguments),
          l = +n.apply(this, arguments),
          h = i.apply(this, arguments) - Tb,
          d = o.apply(this, arguments) - Tb,
          p = yb(d - h),
          g = d > h;
        if ((u || (u = c = pa()), l < s && ((f = l), (l = s), (s = f)), l > Mb))
          if (p > Sb - Mb)
            u.moveTo(l * _b(h), l * xb(h)),
              u.arc(0, 0, l, h, d, !g),
              s > Mb &&
                (u.moveTo(s * _b(d), s * xb(d)), u.arc(0, 0, s, d, h, g));
          else {
            var y,
              v,
              _ = h,
              b = d,
              m = h,
              x = d,
              w = p,
              M = p,
              A = a.apply(this, arguments) / 2,
              T = A > Mb && (r ? +r.apply(this, arguments) : wb(s * s + l * l)),
              S = mb(yb(l - s) / 2, +e.apply(this, arguments)),
              E = S,
              k = S;
            if (T > Mb) {
              var N = kb((T / s) * xb(A)),
                C = kb((T / l) * xb(A));
              (w -= 2 * N) > Mb
                ? ((m += N *= g ? 1 : -1), (x -= N))
                : ((w = 0), (m = x = (h + d) / 2)),
                (M -= 2 * C) > Mb
                  ? ((_ += C *= g ? 1 : -1), (b -= C))
                  : ((M = 0), (_ = b = (h + d) / 2));
            }
            var P = l * _b(_),
              z = l * xb(_),
              D = s * _b(x),
              q = s * xb(x);
            if (S > Mb) {
              var R,
                F = l * _b(b),
                O = l * xb(b),
                I = s * _b(m),
                U = s * xb(m);
              if (p < Ab && (R = qb(P, z, I, U, F, O, D, q))) {
                var B = P - R[0],
                  Y = z - R[1],
                  L = F - R[0],
                  j = O - R[1],
                  H =
                    1 /
                    xb(
                      Eb(
                        (B * L + Y * j) /
                          (wb(B * B + Y * Y) * wb(L * L + j * j))
                      ) / 2
                    ),
                  X = wb(R[0] * R[0] + R[1] * R[1]);
                (E = mb(S, (s - X) / (H - 1))), (k = mb(S, (l - X) / (H + 1)));
              }
            }
            M > Mb
              ? k > Mb
                ? ((y = Rb(I, U, P, z, l, k, g)),
                  (v = Rb(F, O, D, q, l, k, g)),
                  u.moveTo(y.cx + y.x01, y.cy + y.y01),
                  k < S
                    ? u.arc(
                        y.cx,
                        y.cy,
                        k,
                        vb(y.y01, y.x01),
                        vb(v.y01, v.x01),
                        !g
                      )
                    : (u.arc(
                        y.cx,
                        y.cy,
                        k,
                        vb(y.y01, y.x01),
                        vb(y.y11, y.x11),
                        !g
                      ),
                      u.arc(
                        0,
                        0,
                        l,
                        vb(y.cy + y.y11, y.cx + y.x11),
                        vb(v.cy + v.y11, v.cx + v.x11),
                        !g
                      ),
                      u.arc(
                        v.cx,
                        v.cy,
                        k,
                        vb(v.y11, v.x11),
                        vb(v.y01, v.x01),
                        !g
                      )))
                : (u.moveTo(P, z), u.arc(0, 0, l, _, b, !g))
              : u.moveTo(P, z),
              s > Mb && w > Mb
                ? E > Mb
                  ? ((y = Rb(D, q, F, O, s, -E, g)),
                    (v = Rb(P, z, I, U, s, -E, g)),
                    u.lineTo(y.cx + y.x01, y.cy + y.y01),
                    E < S
                      ? u.arc(
                          y.cx,
                          y.cy,
                          E,
                          vb(y.y01, y.x01),
                          vb(v.y01, v.x01),
                          !g
                        )
                      : (u.arc(
                          y.cx,
                          y.cy,
                          E,
                          vb(y.y01, y.x01),
                          vb(y.y11, y.x11),
                          !g
                        ),
                        u.arc(
                          0,
                          0,
                          s,
                          vb(y.cy + y.y11, y.cx + y.x11),
                          vb(v.cy + v.y11, v.cx + v.x11),
                          g
                        ),
                        u.arc(
                          v.cx,
                          v.cy,
                          E,
                          vb(v.y11, v.x11),
                          vb(v.y01, v.x01),
                          !g
                        )))
                  : u.arc(0, 0, s, x, m, g)
                : u.lineTo(D, q);
          }
        else u.moveTo(0, 0);
        if ((u.closePath(), c)) return (u = null), c + "" || null;
      }
      return (
        (c.centroid = function () {
          var e = (+t.apply(this, arguments) + +n.apply(this, arguments)) / 2,
            r =
              (+i.apply(this, arguments) + +o.apply(this, arguments)) / 2 -
              Ab / 2;
          return [_b(r) * e, xb(r) * e];
        }),
        (c.innerRadius = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : gb(+n)), c)
            : t;
        }),
        (c.outerRadius = function (t) {
          return arguments.length
            ? ((n = "function" == typeof t ? t : gb(+t)), c)
            : n;
        }),
        (c.cornerRadius = function (t) {
          return arguments.length
            ? ((e = "function" == typeof t ? t : gb(+t)), c)
            : e;
        }),
        (c.padRadius = function (t) {
          return arguments.length
            ? ((r = null == t ? null : "function" == typeof t ? t : gb(+t)), c)
            : r;
        }),
        (c.startAngle = function (t) {
          return arguments.length
            ? ((i = "function" == typeof t ? t : gb(+t)), c)
            : i;
        }),
        (c.endAngle = function (t) {
          return arguments.length
            ? ((o = "function" == typeof t ? t : gb(+t)), c)
            : o;
        }),
        (c.padAngle = function (t) {
          return arguments.length
            ? ((a = "function" == typeof t ? t : gb(+t)), c)
            : a;
        }),
        (c.context = function (t) {
          return arguments.length ? ((u = null == t ? null : t), c) : u;
        }),
        c
      );
    }),
    (t.area = jb),
    (t.areaRadial = Kb),
    (t.ascending = n),
    (t.autoType = function (t) {
      for (var n in t) {
        var e,
          r,
          i = t[n].trim();
        if (i)
          if ("true" === i) i = !0;
          else if ("false" === i) i = !1;
          else if ("NaN" === i) i = NaN;
          else if (isNaN((e = +i))) {
            if (
              !(r = i.match(
                /^([-+]\d{2})?\d{4}(-\d{2}(-\d{2})?)?(T\d{2}:\d{2}(:\d{2}(\.\d{3})?)?(Z|[-+]\d{2}:\d{2})?)?$/
              ))
            )
              continue;
            Ou && r[4] && !r[7] && (i = i.replace(/-/g, "/").replace(/T/, " ")),
              (i = new Date(i));
          } else i = e;
        else i = null;
        t[n] = i;
      }
      return t;
    }),
    (t.axisBottom = function (t) {
      return pt(3, t);
    }),
    (t.axisLeft = function (t) {
      return pt(4, t);
    }),
    (t.axisRight = function (t) {
      return pt(2, t);
    }),
    (t.axisTop = function (t) {
      return pt(1, t);
    }),
    (t.bin = L),
    (t.bisect = o),
    (t.bisectCenter = u),
    (t.bisectLeft = a),
    (t.bisectRight = o),
    (t.bisector = e),
    (t.blob = function (t, n) {
      return fetch(t, n).then(Iu);
    }),
    (t.brush = function () {
      return Ko(Uo);
    }),
    (t.brushSelection = function (t) {
      var n = t.__brush;
      return n ? n.dim.output(n.selection) : null;
    }),
    (t.brushX = function () {
      return Ko(Oo);
    }),
    (t.brushY = function () {
      return Ko(Io);
    }),
    (t.buffer = function (t, n) {
      return fetch(t, n).then(Uu);
    }),
    (t.chord = function () {
      return ca(!1, !1);
    }),
    (t.chordDirected = function () {
      return ca(!0, !1);
    }),
    (t.chordTranspose = function () {
      return ca(!1, !0);
    }),
    (t.cluster = function () {
      var t = Jh,
        n = 1,
        e = 1,
        r = !1;
      function i(i) {
        var o,
          a = 0;
        i.eachAfter(function (n) {
          var e = n.children;
          e
            ? ((n.x = (function (t) {
                return t.reduce(td, 0) / t.length;
              })(e)),
              (n.y = (function (t) {
                return 1 + t.reduce(nd, 0);
              })(e)))
            : ((n.x = o ? (a += t(n, o)) : 0), (n.y = 0), (o = n));
        });
        var u = (function (t) {
            for (var n; (n = t.children); ) t = n[0];
            return t;
          })(i),
          c = (function (t) {
            for (var n; (n = t.children); ) t = n[n.length - 1];
            return t;
          })(i),
          f = u.x - t(u, c) / 2,
          s = c.x + t(c, u) / 2;
        return i.eachAfter(
          r
            ? function (t) {
                (t.x = (t.x - i.x) * n), (t.y = (i.y - t.y) * e);
              }
            : function (t) {
                (t.x = ((t.x - f) / (s - f)) * n),
                  (t.y = (1 - (i.y ? t.y / i.y : 1)) * e);
              }
        );
      }
      return (
        (i.separation = function (n) {
          return arguments.length ? ((t = n), i) : t;
        }),
        (i.size = function (t) {
          return arguments.length
            ? ((r = !1), (n = +t[0]), (e = +t[1]), i)
            : r
            ? null
            : [n, e];
        }),
        (i.nodeSize = function (t) {
          return arguments.length
            ? ((r = !0), (n = +t[0]), (e = +t[1]), i)
            : r
            ? [n, e]
            : null;
        }),
        i
      );
    }),
    (t.color = _e),
    (t.contourDensity = function () {
      var t = Fa,
        n = Oa,
        e = Ia,
        r = 960,
        i = 500,
        o = 20,
        a = 2,
        u = 3 * o,
        c = (r + 2 * u) >> a,
        f = (i + 2 * u) >> a,
        s = Ea(20);
      function l(r) {
        var i = new Float32Array(c * f),
          l = new Float32Array(c * f),
          d = Math.pow(2, -a);
        r.forEach(function (r, o, a) {
          var s = (t(r, o, a) + u) * d,
            l = (n(r, o, a) + u) * d,
            h = +e(r, o, a);
          if (s >= 0 && s < c && l >= 0 && l < f) {
            var p = Math.floor(s),
              g = Math.floor(l),
              y = s - p - 0.5,
              v = l - g - 0.5;
            (i[p + g * c] += (1 - y) * (1 - v) * h),
              (i[p + 1 + g * c] += y * (1 - v) * h),
              (i[p + 1 + (g + 1) * c] += y * v * h),
              (i[p + (g + 1) * c] += (1 - y) * v * h);
          }
        }),
          qa(
            { width: c, height: f, data: i },
            { width: c, height: f, data: l },
            o >> a
          ),
          Ra(
            { width: c, height: f, data: l },
            { width: c, height: f, data: i },
            o >> a
          ),
          qa(
            { width: c, height: f, data: i },
            { width: c, height: f, data: l },
            o >> a
          ),
          Ra(
            { width: c, height: f, data: l },
            { width: c, height: f, data: i },
            o >> a
          ),
          qa(
            { width: c, height: f, data: i },
            { width: c, height: f, data: l },
            o >> a
          ),
          Ra(
            { width: c, height: f, data: l },
            { width: c, height: f, data: i },
            o >> a
          );
        var p = s(i);
        if (!Array.isArray(p)) {
          var g = j(i);
          (p = U(0, g, p)), (p = J(0, Math.floor(g / p) * p, p)).shift();
        }
        return Da().thresholds(p).size([c, f])(i).map(h);
      }
      function h(t) {
        return (t.value *= Math.pow(2, -2 * a)), t.coordinates.forEach(d), t;
      }
      function d(t) {
        t.forEach(p);
      }
      function p(t) {
        t.forEach(g);
      }
      function g(t) {
        (t[0] = t[0] * Math.pow(2, a) - u), (t[1] = t[1] * Math.pow(2, a) - u);
      }
      function y() {
        return (c = (r + 2 * (u = 3 * o)) >> a), (f = (i + 2 * u) >> a), l;
      }
      return (
        (l.x = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : Ea(+n)), l)
            : t;
        }),
        (l.y = function (t) {
          return arguments.length
            ? ((n = "function" == typeof t ? t : Ea(+t)), l)
            : n;
        }),
        (l.weight = function (t) {
          return arguments.length
            ? ((e = "function" == typeof t ? t : Ea(+t)), l)
            : e;
        }),
        (l.size = function (t) {
          if (!arguments.length) return [r, i];
          var n = +t[0],
            e = +t[1];
          if (!(n >= 0 && e >= 0)) throw new Error("invalid size");
          return (r = n), (i = e), y();
        }),
        (l.cellSize = function (t) {
          if (!arguments.length) return 1 << a;
          if (!((t = +t) >= 1)) throw new Error("invalid cell size");
          return (a = Math.floor(Math.log(t) / Math.LN2)), y();
        }),
        (l.thresholds = function (t) {
          return arguments.length
            ? ((s =
                "function" == typeof t
                  ? t
                  : Array.isArray(t)
                  ? Ea(Ta.call(t))
                  : Ea(t)),
              l)
            : s;
        }),
        (l.bandwidth = function (t) {
          if (!arguments.length) return Math.sqrt(o * (o + 1));
          if (!((t = +t) >= 0)) throw new Error("invalid bandwidth");
          return (o = Math.round((Math.sqrt(4 * t * t + 1) - 1) / 2)), y();
        }),
        l
      );
    }),
    (t.contours = Da),
    (t.count = c),
    (t.create = function (t) {
      return Fn(St(t).call(document.documentElement));
    }),
    (t.creator = St),
    (t.cross = function (...t) {
      const n =
          "function" == typeof t[t.length - 1] &&
          (function (t) {
            return (n) => t(...n);
          })(t.pop()),
        e = (t = t.map(l)).map(f),
        r = t.length - 1,
        i = new Array(r + 1).fill(0),
        o = [];
      if (r < 0 || e.some(s)) return o;
      for (;;) {
        o.push(i.map((n, e) => t[e][n]));
        let a = r;
        for (; ++i[a] === e[a]; ) {
          if (0 === a) return n ? o.map(n) : o;
          i[a--] = 0;
        }
      }
    }),
    (t.csv = ju),
    (t.csvFormat = Au),
    (t.csvFormatBody = Tu),
    (t.csvFormatRow = Eu),
    (t.csvFormatRows = Su),
    (t.csvFormatValue = ku),
    (t.csvParse = wu),
    (t.csvParseRows = Mu),
    (t.cubehelix = or),
    (t.cumsum = function (t, n) {
      var e = 0,
        r = 0;
      return Float64Array.from(
        t,
        void 0 === n ? (t) => (e += +t || 0) : (i) => (e += +n(i, r++, t) || 0)
      );
    }),
    (t.curveBasis = function (t) {
      return new Tm(t);
    }),
    (t.curveBasisClosed = function (t) {
      return new Sm(t);
    }),
    (t.curveBasisOpen = function (t) {
      return new Em(t);
    }),
    (t.curveBumpX = function (t) {
      return new km(t, !0);
    }),
    (t.curveBumpY = function (t) {
      return new km(t, !1);
    }),
    (t.curveBundle = Cm),
    (t.curveCardinal = Dm),
    (t.curveCardinalClosed = Rm),
    (t.curveCardinalOpen = Om),
    (t.curveCatmullRom = Bm),
    (t.curveCatmullRomClosed = Lm),
    (t.curveCatmullRomOpen = Hm),
    (t.curveLinear = Ub),
    (t.curveLinearClosed = function (t) {
      return new Xm(t);
    }),
    (t.curveMonotoneX = function (t) {
      return new Zm(t);
    }),
    (t.curveMonotoneY = function (t) {
      return new Km(t);
    }),
    (t.curveNatural = function (t) {
      return new Jm(t);
    }),
    (t.curveStep = function (t) {
      return new nx(t, 0.5);
    }),
    (t.curveStepAfter = function (t) {
      return new nx(t, 1);
    }),
    (t.curveStepBefore = function (t) {
      return new nx(t, 0);
    }),
    (t.descending = function (t, n) {
      return null == t || null == n
        ? NaN
        : n < t
        ? -1
        : n > t
        ? 1
        : n >= t
        ? 0
        : NaN;
    }),
    (t.deviation = d),
    (t.difference = function (t, ...n) {
      t = new Set(t);
      for (const e of n) for (const n of e) t.delete(n);
      return t;
    }),
    (t.disjoint = function (t, n) {
      const e = n[Symbol.iterator](),
        r = new Set();
      for (const n of t) {
        if (r.has(n)) return !1;
        let t, i;
        for (; ({ value: t, done: i } = e.next()) && !i; ) {
          if (Object.is(n, t)) return !1;
          r.add(t);
        }
      }
      return !0;
    }),
    (t.dispatch = yt),
    (t.drag = function () {
      var t,
        n,
        e,
        r,
        i = Zn,
        o = Kn,
        a = Qn,
        u = Jn,
        c = {},
        f = yt("start", "drag", "end"),
        s = 0,
        l = 0;
      function h(t) {
        t.on("mousedown.drag", d)
          .filter(u)
          .on("touchstart.drag", y)
          .on("touchmove.drag", v, Ln)
          .on("touchend.drag touchcancel.drag", _)
          .style("touch-action", "none")
          .style("-webkit-tap-highlight-color", "rgba(0,0,0,0)");
      }
      function d(a, u) {
        if (!r && i.call(this, a, u)) {
          var c = b(this, o.call(this, a, u), a, u, "mouse");
          c &&
            (Fn(a.view).on("mousemove.drag", p, jn).on("mouseup.drag", g, jn),
            Gn(a.view),
            Hn(a),
            (e = !1),
            (t = a.clientX),
            (n = a.clientY),
            c("start", a));
        }
      }
      function p(r) {
        if ((Xn(r), !e)) {
          var i = r.clientX - t,
            o = r.clientY - n;
          e = i * i + o * o > l;
        }
        c.mouse("drag", r);
      }
      function g(t) {
        Fn(t.view).on("mousemove.drag mouseup.drag", null),
          Vn(t.view, e),
          Xn(t),
          c.mouse("end", t);
      }
      function y(t, n) {
        if (i.call(this, t, n)) {
          var e,
            r,
            a = t.changedTouches,
            u = o.call(this, t, n),
            c = a.length;
          for (e = 0; e < c; ++e)
            (r = b(this, u, t, n, a[e].identifier, a[e])) &&
              (Hn(t), r("start", t, a[e]));
        }
      }
      function v(t) {
        var n,
          e,
          r = t.changedTouches,
          i = r.length;
        for (n = 0; n < i; ++n)
          (e = c[r[n].identifier]) && (Xn(t), e("drag", t, r[n]));
      }
      function _(t) {
        var n,
          e,
          i = t.changedTouches,
          o = i.length;
        for (
          r && clearTimeout(r),
            r = setTimeout(function () {
              r = null;
            }, 500),
            n = 0;
          n < o;
          ++n
        )
          (e = c[i[n].identifier]) && (Hn(t), e("end", t, i[n]));
      }
      function b(t, n, e, r, i, o) {
        var u,
          l,
          d,
          p = f.copy(),
          g = Yn(o || e, n);
        if (
          null !=
          (d = a.call(
            t,
            new Wn("beforestart", {
              sourceEvent: e,
              target: h,
              identifier: i,
              active: s,
              x: g[0],
              y: g[1],
              dx: 0,
              dy: 0,
              dispatch: p,
            }),
            r
          ))
        )
          return (
            (u = d.x - g[0] || 0),
            (l = d.y - g[1] || 0),
            function e(o, a, f) {
              var y,
                v = g;
              switch (o) {
                case "start":
                  (c[i] = e), (y = s++);
                  break;
                case "end":
                  delete c[i], --s;
                case "drag":
                  (g = Yn(f || a, n)), (y = s);
              }
              p.call(
                o,
                t,
                new Wn(o, {
                  sourceEvent: a,
                  subject: d,
                  target: h,
                  identifier: i,
                  active: y,
                  x: g[0] + u,
                  y: g[1] + l,
                  dx: g[0] - v[0],
                  dy: g[1] - v[1],
                  dispatch: p,
                }),
                r
              );
            }
          );
      }
      return (
        (h.filter = function (t) {
          return arguments.length
            ? ((i = "function" == typeof t ? t : $n(!!t)), h)
            : i;
        }),
        (h.container = function (t) {
          return arguments.length
            ? ((o = "function" == typeof t ? t : $n(t)), h)
            : o;
        }),
        (h.subject = function (t) {
          return arguments.length
            ? ((a = "function" == typeof t ? t : $n(t)), h)
            : a;
        }),
        (h.touchable = function (t) {
          return arguments.length
            ? ((u = "function" == typeof t ? t : $n(!!t)), h)
            : u;
        }),
        (h.on = function () {
          var t = f.on.apply(f, arguments);
          return t === f ? h : t;
        }),
        (h.clickDistance = function (t) {
          return arguments.length ? ((l = (t = +t) * t), h) : Math.sqrt(l);
        }),
        h
      );
    }),
    (t.dragDisable = Gn),
    (t.dragEnable = Vn),
    (t.dsv = function (t, n, e, r) {
      3 === arguments.length &&
        "function" == typeof e &&
        ((r = e), (e = void 0));
      var i = mu(t);
      return Yu(n, e).then(function (t) {
        return i.parse(t, r);
      });
    }),
    (t.dsvFormat = mu),
    (t.easeBack = yo),
    (t.easeBackIn = po),
    (t.easeBackInOut = yo),
    (t.easeBackOut = go),
    (t.easeBounce = lo),
    (t.easeBounceIn = function (t) {
      return 1 - lo(1 - t);
    }),
    (t.easeBounceInOut = function (t) {
      return ((t *= 2) <= 1 ? 1 - lo(1 - t) : lo(t - 1) + 1) / 2;
    }),
    (t.easeBounceOut = lo),
    (t.easeCircle = co),
    (t.easeCircleIn = function (t) {
      return 1 - Math.sqrt(1 - t * t);
    }),
    (t.easeCircleInOut = co),
    (t.easeCircleOut = function (t) {
      return Math.sqrt(1 - --t * t);
    }),
    (t.easeCubic = Ji),
    (t.easeCubicIn = function (t) {
      return t * t * t;
    }),
    (t.easeCubicInOut = Ji),
    (t.easeCubicOut = function (t) {
      return --t * t * t + 1;
    }),
    (t.easeElastic = bo),
    (t.easeElasticIn = _o),
    (t.easeElasticInOut = mo),
    (t.easeElasticOut = bo),
    (t.easeExp = uo),
    (t.easeExpIn = function (t) {
      return ao(1 - +t);
    }),
    (t.easeExpInOut = uo),
    (t.easeExpOut = function (t) {
      return 1 - ao(t);
    }),
    (t.easeLinear = (t) => +t),
    (t.easePoly = eo),
    (t.easePolyIn = to),
    (t.easePolyInOut = eo),
    (t.easePolyOut = no),
    (t.easeQuad = Qi),
    (t.easeQuadIn = function (t) {
      return t * t;
    }),
    (t.easeQuadInOut = Qi),
    (t.easeQuadOut = function (t) {
      return t * (2 - t);
    }),
    (t.easeSin = oo),
    (t.easeSinIn = function (t) {
      return 1 == +t ? 1 : 1 - Math.cos(t * io);
    }),
    (t.easeSinInOut = oo),
    (t.easeSinOut = function (t) {
      return Math.sin(t * io);
    }),
    (t.every = function (t, n) {
      if ("function" != typeof n) throw new TypeError("test is not a function");
      let e = -1;
      for (const r of t) if (!n(r, ++e, t)) return !1;
      return !0;
    }),
    (t.extent = p),
    (t.fcumsum = function (t, n) {
      const e = new g();
      let r = -1;
      return Float64Array.from(
        t,
        void 0 === n ? (t) => e.add(+t || 0) : (i) => e.add(+n(i, ++r, t) || 0)
      );
    }),
    (t.filter = function (t, n) {
      if ("function" != typeof n) throw new TypeError("test is not a function");
      const e = [];
      let r = -1;
      for (const i of t) n(i, ++r, t) && e.push(i);
      return e;
    }),
    (t.flatGroup = function (t, ...n) {
      return T(A(t, ...n), n);
    }),
    (t.flatRollup = function (t, n, ...e) {
      return T(E(t, n, ...e), e);
    }),
    (t.forceCenter = function (t, n) {
      var e,
        r = 1;
      function i() {
        var i,
          o,
          a = e.length,
          u = 0,
          c = 0;
        for (i = 0; i < a; ++i) (u += (o = e[i]).x), (c += o.y);
        for (u = (u / a - t) * r, c = (c / a - n) * r, i = 0; i < a; ++i)
          ((o = e[i]).x -= u), (o.y -= c);
      }
      return (
        null == t && (t = 0),
        null == n && (n = 0),
        (i.initialize = function (t) {
          e = t;
        }),
        (i.x = function (n) {
          return arguments.length ? ((t = +n), i) : t;
        }),
        (i.y = function (t) {
          return arguments.length ? ((n = +t), i) : n;
        }),
        (i.strength = function (t) {
          return arguments.length ? ((r = +t), i) : r;
        }),
        i
      );
    }),
    (t.forceCollide = function (t) {
      var n,
        e,
        r,
        i = 1,
        o = 1;
      function a() {
        for (var t, a, c, f, s, l, h, d = n.length, p = 0; p < o; ++p)
          for (a = tc(n, ac, uc).visitAfter(u), t = 0; t < d; ++t)
            (c = n[t]),
              (l = e[c.index]),
              (h = l * l),
              (f = c.x + c.vx),
              (s = c.y + c.vy),
              a.visit(g);
        function g(t, n, e, o, a) {
          var u = t.data,
            d = t.r,
            p = l + d;
          if (!u) return n > f + p || o < f - p || e > s + p || a < s - p;
          if (u.index > c.index) {
            var g = f - u.x - u.vx,
              y = s - u.y - u.vy,
              v = g * g + y * y;
            v < p * p &&
              (0 === g && (v += (g = oc(r)) * g),
              0 === y && (v += (y = oc(r)) * y),
              (v = ((p - (v = Math.sqrt(v))) / v) * i),
              (c.vx += (g *= v) * (p = (d *= d) / (h + d))),
              (c.vy += (y *= v) * p),
              (u.vx -= g * (p = 1 - p)),
              (u.vy -= y * p));
          }
        }
      }
      function u(t) {
        if (t.data) return (t.r = e[t.data.index]);
        for (var n = (t.r = 0); n < 4; ++n)
          t[n] && t[n].r > t.r && (t.r = t[n].r);
      }
      function c() {
        if (n) {
          var r,
            i,
            o = n.length;
          for (e = new Array(o), r = 0; r < o; ++r)
            (i = n[r]), (e[i.index] = +t(i, r, n));
        }
      }
      return (
        "function" != typeof t && (t = ic(null == t ? 1 : +t)),
        (a.initialize = function (t, e) {
          (n = t), (r = e), c();
        }),
        (a.iterations = function (t) {
          return arguments.length ? ((o = +t), a) : o;
        }),
        (a.strength = function (t) {
          return arguments.length ? ((i = +t), a) : i;
        }),
        (a.radius = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : ic(+n)), c(), a)
            : t;
        }),
        a
      );
    }),
    (t.forceLink = function (t) {
      var n,
        e,
        r,
        i,
        o,
        a,
        u = cc,
        c = function (t) {
          return 1 / Math.min(i[t.source.index], i[t.target.index]);
        },
        f = ic(30),
        s = 1;
      function l(r) {
        for (var i = 0, u = t.length; i < s; ++i)
          for (var c, f, l, h, d, p, g, y = 0; y < u; ++y)
            (f = (c = t[y]).source),
              (h = (l = c.target).x + l.vx - f.x - f.vx || oc(a)),
              (d = l.y + l.vy - f.y - f.vy || oc(a)),
              (h *= p =
                (((p = Math.sqrt(h * h + d * d)) - e[y]) / p) * r * n[y]),
              (d *= p),
              (l.vx -= h * (g = o[y])),
              (l.vy -= d * g),
              (f.vx += h * (g = 1 - g)),
              (f.vy += d * g);
      }
      function h() {
        if (r) {
          var a,
            c,
            f = r.length,
            s = t.length,
            l = new Map(r.map((t, n) => [u(t, n, r), t]));
          for (a = 0, i = new Array(f); a < s; ++a)
            ((c = t[a]).index = a),
              "object" != typeof c.source && (c.source = fc(l, c.source)),
              "object" != typeof c.target && (c.target = fc(l, c.target)),
              (i[c.source.index] = (i[c.source.index] || 0) + 1),
              (i[c.target.index] = (i[c.target.index] || 0) + 1);
          for (a = 0, o = new Array(s); a < s; ++a)
            (c = t[a]),
              (o[a] =
                i[c.source.index] / (i[c.source.index] + i[c.target.index]));
          (n = new Array(s)), d(), (e = new Array(s)), p();
        }
      }
      function d() {
        if (r) for (var e = 0, i = t.length; e < i; ++e) n[e] = +c(t[e], e, t);
      }
      function p() {
        if (r) for (var n = 0, i = t.length; n < i; ++n) e[n] = +f(t[n], n, t);
      }
      return (
        null == t && (t = []),
        (l.initialize = function (t, n) {
          (r = t), (a = n), h();
        }),
        (l.links = function (n) {
          return arguments.length ? ((t = n), h(), l) : t;
        }),
        (l.id = function (t) {
          return arguments.length ? ((u = t), l) : u;
        }),
        (l.iterations = function (t) {
          return arguments.length ? ((s = +t), l) : s;
        }),
        (l.strength = function (t) {
          return arguments.length
            ? ((c = "function" == typeof t ? t : ic(+t)), d(), l)
            : c;
        }),
        (l.distance = function (t) {
          return arguments.length
            ? ((f = "function" == typeof t ? t : ic(+t)), p(), l)
            : f;
        }),
        l
      );
    }),
    (t.forceManyBody = function () {
      var t,
        n,
        e,
        r,
        i,
        o = ic(-30),
        a = 1,
        u = 1 / 0,
        c = 0.81;
      function f(e) {
        var i,
          o = t.length,
          a = tc(t, lc, hc).visitAfter(l);
        for (r = e, i = 0; i < o; ++i) (n = t[i]), a.visit(h);
      }
      function s() {
        if (t) {
          var n,
            e,
            r = t.length;
          for (i = new Array(r), n = 0; n < r; ++n)
            (e = t[n]), (i[e.index] = +o(e, n, t));
        }
      }
      function l(t) {
        var n,
          e,
          r,
          o,
          a,
          u = 0,
          c = 0;
        if (t.length) {
          for (r = o = a = 0; a < 4; ++a)
            (n = t[a]) &&
              (e = Math.abs(n.value)) &&
              ((u += n.value), (c += e), (r += e * n.x), (o += e * n.y));
          (t.x = r / c), (t.y = o / c);
        } else {
          ((n = t).x = n.data.x), (n.y = n.data.y);
          do {
            u += i[n.data.index];
          } while ((n = n.next));
        }
        t.value = u;
      }
      function h(t, o, f, s) {
        if (!t.value) return !0;
        var l = t.x - n.x,
          h = t.y - n.y,
          d = s - o,
          p = l * l + h * h;
        if ((d * d) / c < p)
          return (
            p < u &&
              (0 === l && (p += (l = oc(e)) * l),
              0 === h && (p += (h = oc(e)) * h),
              p < a && (p = Math.sqrt(a * p)),
              (n.vx += (l * t.value * r) / p),
              (n.vy += (h * t.value * r) / p)),
            !0
          );
        if (!(t.length || p >= u)) {
          (t.data !== n || t.next) &&
            (0 === l && (p += (l = oc(e)) * l),
            0 === h && (p += (h = oc(e)) * h),
            p < a && (p = Math.sqrt(a * p)));
          do {
            t.data !== n &&
              ((d = (i[t.data.index] * r) / p),
              (n.vx += l * d),
              (n.vy += h * d));
          } while ((t = t.next));
        }
      }
      return (
        (f.initialize = function (n, r) {
          (t = n), (e = r), s();
        }),
        (f.strength = function (t) {
          return arguments.length
            ? ((o = "function" == typeof t ? t : ic(+t)), s(), f)
            : o;
        }),
        (f.distanceMin = function (t) {
          return arguments.length ? ((a = t * t), f) : Math.sqrt(a);
        }),
        (f.distanceMax = function (t) {
          return arguments.length ? ((u = t * t), f) : Math.sqrt(u);
        }),
        (f.theta = function (t) {
          return arguments.length ? ((c = t * t), f) : Math.sqrt(c);
        }),
        f
      );
    }),
    (t.forceRadial = function (t, n, e) {
      var r,
        i,
        o,
        a = ic(0.1);
      function u(t) {
        for (var a = 0, u = r.length; a < u; ++a) {
          var c = r[a],
            f = c.x - n || 1e-6,
            s = c.y - e || 1e-6,
            l = Math.sqrt(f * f + s * s),
            h = ((o[a] - l) * i[a] * t) / l;
          (c.vx += f * h), (c.vy += s * h);
        }
      }
      function c() {
        if (r) {
          var n,
            e = r.length;
          for (i = new Array(e), o = new Array(e), n = 0; n < e; ++n)
            (o[n] = +t(r[n], n, r)), (i[n] = isNaN(o[n]) ? 0 : +a(r[n], n, r));
        }
      }
      return (
        "function" != typeof t && (t = ic(+t)),
        null == n && (n = 0),
        null == e && (e = 0),
        (u.initialize = function (t) {
          (r = t), c();
        }),
        (u.strength = function (t) {
          return arguments.length
            ? ((a = "function" == typeof t ? t : ic(+t)), c(), u)
            : a;
        }),
        (u.radius = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : ic(+n)), c(), u)
            : t;
        }),
        (u.x = function (t) {
          return arguments.length ? ((n = +t), u) : n;
        }),
        (u.y = function (t) {
          return arguments.length ? ((e = +t), u) : e;
        }),
        u
      );
    }),
    (t.forceSimulation = function (t) {
      var n,
        e = 1,
        r = 0.001,
        i = 1 - Math.pow(r, 1 / 300),
        o = 0,
        a = 0.6,
        u = new Map(),
        c = ci(l),
        f = yt("tick", "end"),
        s = (function () {
          let t = 1;
          return () => (t = (1664525 * t + 1013904223) % sc) / sc;
        })();
      function l() {
        h(), f.call("tick", n), e < r && (c.stop(), f.call("end", n));
      }
      function h(r) {
        var c,
          f,
          s = t.length;
        void 0 === r && (r = 1);
        for (var l = 0; l < r; ++l)
          for (
            e += (o - e) * i,
              u.forEach(function (t) {
                t(e);
              }),
              c = 0;
            c < s;
            ++c
          )
            null == (f = t[c]).fx
              ? (f.x += f.vx *= a)
              : ((f.x = f.fx), (f.vx = 0)),
              null == f.fy ? (f.y += f.vy *= a) : ((f.y = f.fy), (f.vy = 0));
        return n;
      }
      function d() {
        for (var n, e = 0, r = t.length; e < r; ++e) {
          if (
            (((n = t[e]).index = e),
            null != n.fx && (n.x = n.fx),
            null != n.fy && (n.y = n.fy),
            isNaN(n.x) || isNaN(n.y))
          ) {
            var i = 10 * Math.sqrt(0.5 + e),
              o = e * dc;
            (n.x = i * Math.cos(o)), (n.y = i * Math.sin(o));
          }
          (isNaN(n.vx) || isNaN(n.vy)) && (n.vx = n.vy = 0);
        }
      }
      function p(n) {
        return n.initialize && n.initialize(t, s), n;
      }
      return (
        null == t && (t = []),
        d(),
        (n = {
          tick: h,
          restart: function () {
            return c.restart(l), n;
          },
          stop: function () {
            return c.stop(), n;
          },
          nodes: function (e) {
            return arguments.length ? ((t = e), d(), u.forEach(p), n) : t;
          },
          alpha: function (t) {
            return arguments.length ? ((e = +t), n) : e;
          },
          alphaMin: function (t) {
            return arguments.length ? ((r = +t), n) : r;
          },
          alphaDecay: function (t) {
            return arguments.length ? ((i = +t), n) : +i;
          },
          alphaTarget: function (t) {
            return arguments.length ? ((o = +t), n) : o;
          },
          velocityDecay: function (t) {
            return arguments.length ? ((a = 1 - t), n) : 1 - a;
          },
          randomSource: function (t) {
            return arguments.length ? ((s = t), u.forEach(p), n) : s;
          },
          force: function (t, e) {
            return arguments.length > 1
              ? (null == e ? u.delete(t) : u.set(t, p(e)), n)
              : u.get(t);
          },
          find: function (n, e, r) {
            var i,
              o,
              a,
              u,
              c,
              f = 0,
              s = t.length;
            for (null == r ? (r = 1 / 0) : (r *= r), f = 0; f < s; ++f)
              (a = (i = n - (u = t[f]).x) * i + (o = e - u.y) * o) < r &&
                ((c = u), (r = a));
            return c;
          },
          on: function (t, e) {
            return arguments.length > 1 ? (f.on(t, e), n) : f.on(t);
          },
        })
      );
    }),
    (t.forceX = function (t) {
      var n,
        e,
        r,
        i = ic(0.1);
      function o(t) {
        for (var i, o = 0, a = n.length; o < a; ++o)
          (i = n[o]).vx += (r[o] - i.x) * e[o] * t;
      }
      function a() {
        if (n) {
          var o,
            a = n.length;
          for (e = new Array(a), r = new Array(a), o = 0; o < a; ++o)
            e[o] = isNaN((r[o] = +t(n[o], o, n))) ? 0 : +i(n[o], o, n);
        }
      }
      return (
        "function" != typeof t && (t = ic(null == t ? 0 : +t)),
        (o.initialize = function (t) {
          (n = t), a();
        }),
        (o.strength = function (t) {
          return arguments.length
            ? ((i = "function" == typeof t ? t : ic(+t)), a(), o)
            : i;
        }),
        (o.x = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : ic(+n)), a(), o)
            : t;
        }),
        o
      );
    }),
    (t.forceY = function (t) {
      var n,
        e,
        r,
        i = ic(0.1);
      function o(t) {
        for (var i, o = 0, a = n.length; o < a; ++o)
          (i = n[o]).vy += (r[o] - i.y) * e[o] * t;
      }
      function a() {
        if (n) {
          var o,
            a = n.length;
          for (e = new Array(a), r = new Array(a), o = 0; o < a; ++o)
            e[o] = isNaN((r[o] = +t(n[o], o, n))) ? 0 : +i(n[o], o, n);
        }
      }
      return (
        "function" != typeof t && (t = ic(null == t ? 0 : +t)),
        (o.initialize = function (t) {
          (n = t), a();
        }),
        (o.strength = function (t) {
          return arguments.length
            ? ((i = "function" == typeof t ? t : ic(+t)), a(), o)
            : i;
        }),
        (o.y = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : ic(+n)), a(), o)
            : t;
        }),
        o
      );
    }),
    (t.formatDefaultLocale = Ec),
    (t.formatLocale = Sc),
    (t.formatSpecifier = _c),
    (t.fsum = function (t, n) {
      const e = new g();
      if (void 0 === n) for (let n of t) (n = +n) && e.add(n);
      else {
        let r = -1;
        for (let i of t) (i = +n(i, ++r, t)) && e.add(i);
      }
      return +e;
    }),
    (t.geoAlbers = Ph),
    (t.geoAlbersUsa = function () {
      var t,
        n,
        e,
        r,
        i,
        o,
        a = Ph(),
        u = Ch().rotate([154, 0]).center([-2, 58.5]).parallels([55, 65]),
        c = Ch().rotate([157, 0]).center([-3, 19.9]).parallels([8, 18]),
        f = {
          point: function (t, n) {
            o = [t, n];
          },
        };
      function s(t) {
        var n = t[0],
          a = t[1];
        return (
          (o = null),
          e.point(n, a),
          o || (r.point(n, a), o) || (i.point(n, a), o)
        );
      }
      function l() {
        return (t = n = null), s;
      }
      return (
        (s.invert = function (t) {
          var n = a.scale(),
            e = a.translate(),
            r = (t[0] - e[0]) / n,
            i = (t[1] - e[1]) / n;
          return (
            i >= 0.12 && i < 0.234 && r >= -0.425 && r < -0.214
              ? u
              : i >= 0.166 && i < 0.234 && r >= -0.214 && r < -0.115
              ? c
              : a
          ).invert(t);
        }),
        (s.stream = function (e) {
          return t && n === e
            ? t
            : ((r = [a.stream((n = e)), u.stream(e), c.stream(e)]),
              (i = r.length),
              (t = {
                point: function (t, n) {
                  for (var e = -1; ++e < i; ) r[e].point(t, n);
                },
                sphere: function () {
                  for (var t = -1; ++t < i; ) r[t].sphere();
                },
                lineStart: function () {
                  for (var t = -1; ++t < i; ) r[t].lineStart();
                },
                lineEnd: function () {
                  for (var t = -1; ++t < i; ) r[t].lineEnd();
                },
                polygonStart: function () {
                  for (var t = -1; ++t < i; ) r[t].polygonStart();
                },
                polygonEnd: function () {
                  for (var t = -1; ++t < i; ) r[t].polygonEnd();
                },
              }));
          var r, i;
        }),
        (s.precision = function (t) {
          return arguments.length
            ? (a.precision(t), u.precision(t), c.precision(t), l())
            : a.precision();
        }),
        (s.scale = function (t) {
          return arguments.length
            ? (a.scale(t),
              u.scale(0.35 * t),
              c.scale(t),
              s.translate(a.translate()))
            : a.scale();
        }),
        (s.translate = function (t) {
          if (!arguments.length) return a.translate();
          var n = a.scale(),
            o = +t[0],
            s = +t[1];
          return (
            (e = a
              .translate(t)
              .clipExtent([
                [o - 0.455 * n, s - 0.238 * n],
                [o + 0.455 * n, s + 0.238 * n],
              ])
              .stream(f)),
            (r = u
              .translate([o - 0.307 * n, s + 0.201 * n])
              .clipExtent([
                [o - 0.425 * n + Pc, s + 0.12 * n + Pc],
                [o - 0.214 * n - Pc, s + 0.234 * n - Pc],
              ])
              .stream(f)),
            (i = c
              .translate([o - 0.205 * n, s + 0.212 * n])
              .clipExtent([
                [o - 0.214 * n + Pc, s + 0.166 * n + Pc],
                [o - 0.115 * n - Pc, s + 0.234 * n - Pc],
              ])
              .stream(f)),
            l()
          );
        }),
        (s.fitExtent = function (t, n) {
          return _h(s, t, n);
        }),
        (s.fitSize = function (t, n) {
          return bh(s, t, n);
        }),
        (s.fitWidth = function (t, n) {
          return mh(s, t, n);
        }),
        (s.fitHeight = function (t, n) {
          return xh(s, t, n);
        }),
        s.scale(1070)
      );
    }),
    (t.geoArea = function (t) {
      return (Sf = new g()), cf(t, Ef), 2 * Sf;
    }),
    (t.geoAzimuthalEqualArea = function () {
      return Sh(qh).scale(124.75).clipAngle(179.999);
    }),
    (t.geoAzimuthalEqualAreaRaw = qh),
    (t.geoAzimuthalEquidistant = function () {
      return Sh(Rh).scale(79.4188).clipAngle(179.999);
    }),
    (t.geoAzimuthalEquidistantRaw = Rh),
    (t.geoBounds = function (t) {
      var n, e, r, i, o, a, u;
      if (
        ((vf = yf = -(pf = gf = 1 / 0)), (Mf = []), cf(t, ns), (e = Mf.length))
      ) {
        for (Mf.sort(ss), n = 1, o = [(r = Mf[0])]; n < e; ++n)
          ls(r, (i = Mf[n])[0]) || ls(r, i[1])
            ? (fs(r[0], i[1]) > fs(r[0], r[1]) && (r[1] = i[1]),
              fs(i[0], r[1]) > fs(r[0], r[1]) && (r[0] = i[0]))
            : o.push((r = i));
        for (a = -1 / 0, n = 0, r = o[(e = o.length - 1)]; n <= e; r = i, ++n)
          (i = o[n]),
            (u = fs(r[1], i[0])) > a && ((a = u), (pf = i[0]), (yf = r[1]));
      }
      return (
        (Mf = Af = null),
        pf === 1 / 0 || gf === 1 / 0
          ? [
              [NaN, NaN],
              [NaN, NaN],
            ]
          : [
              [pf, gf],
              [yf, vf],
            ]
      );
    }),
    (t.geoCentroid = function (t) {
      (Uf = Bf = Yf = Lf = jf = Hf = Xf = Gf = 0),
        (Vf = new g()),
        ($f = new g()),
        (Wf = new g()),
        cf(t, hs);
      var n = +Vf,
        e = +$f,
        r = +Wf,
        i = Xc(n, e, r);
      return i < zc &&
        ((n = Hf),
        (e = Xf),
        (r = Gf),
        Bf < Pc && ((n = Yf), (e = Lf), (r = jf)),
        (i = Xc(n, e, r)) < zc)
        ? [NaN, NaN]
        : [Yc(e, n) * Oc, Jc(r / i) * Oc];
    }),
    (t.geoCircle = function () {
      var t,
        n,
        e = Ms([0, 0]),
        r = Ms(90),
        i = Ms(6),
        o = {
          point: function (e, r) {
            t.push((e = n(e, r))), (e[0] *= Oc), (e[1] *= Oc);
          },
        };
      function a() {
        var a = e.apply(this, arguments),
          u = r.apply(this, arguments) * Ic,
          c = i.apply(this, arguments) * Ic;
        return (
          (t = []),
          (n = Ss(-a[0] * Ic, -a[1] * Ic, 0).invert),
          Ps(o, u, c, 1),
          (a = { type: "Polygon", coordinates: [t] }),
          (t = n = null),
          a
        );
      }
      return (
        (a.center = function (t) {
          return arguments.length
            ? ((e = "function" == typeof t ? t : Ms([+t[0], +t[1]])), a)
            : e;
        }),
        (a.radius = function (t) {
          return arguments.length
            ? ((r = "function" == typeof t ? t : Ms(+t)), a)
            : r;
        }),
        (a.precision = function (t) {
          return arguments.length
            ? ((i = "function" == typeof t ? t : Ms(+t)), a)
            : i;
        }),
        a
      );
    }),
    (t.geoClipAntimeridian = js),
    (t.geoClipCircle = Hs),
    (t.geoClipExtent = function () {
      var t,
        n,
        e,
        r = 0,
        i = 0,
        o = 960,
        a = 500;
      return (e = {
        stream: function (e) {
          return t && n === e ? t : (t = Ks(r, i, o, a)((n = e)));
        },
        extent: function (u) {
          return arguments.length
            ? ((r = +u[0][0]),
              (i = +u[0][1]),
              (o = +u[1][0]),
              (a = +u[1][1]),
              (t = n = null),
              e)
            : [
                [r, i],
                [o, a],
              ];
        },
      });
    }),
    (t.geoClipRectangle = Ks),
    (t.geoConicConformal = function () {
      return kh(Uh).scale(109.5).parallels([30, 30]);
    }),
    (t.geoConicConformalRaw = Uh),
    (t.geoConicEqualArea = Ch),
    (t.geoConicEqualAreaRaw = Nh),
    (t.geoConicEquidistant = function () {
      return kh(Yh).scale(131.154).center([0, 13.9389]);
    }),
    (t.geoConicEquidistantRaw = Yh),
    (t.geoContains = function (t, n) {
      return (t && al.hasOwnProperty(t.type) ? al[t.type] : cl)(t, n);
    }),
    (t.geoDistance = ol),
    (t.geoEqualEarth = function () {
      return Sh(Vh).scale(177.158);
    }),
    (t.geoEqualEarthRaw = Vh),
    (t.geoEquirectangular = function () {
      return Sh(Bh).scale(152.63);
    }),
    (t.geoEquirectangularRaw = Bh),
    (t.geoGnomonic = function () {
      return Sh($h).scale(144.049).clipAngle(60);
    }),
    (t.geoGnomonicRaw = $h),
    (t.geoGraticule = yl),
    (t.geoGraticule10 = function () {
      return yl()();
    }),
    (t.geoIdentity = function () {
      var t,
        n,
        e,
        r,
        i,
        o,
        a,
        u = 1,
        c = 0,
        f = 0,
        s = 1,
        l = 1,
        h = 0,
        d = null,
        p = 1,
        g = 1,
        y = gh({
          point: function (t, n) {
            var e = b([t, n]);
            this.stream.point(e[0], e[1]);
          },
        }),
        v = xl;
      function _() {
        return (p = u * s), (g = u * l), (o = a = null), b;
      }
      function b(e) {
        var r = e[0] * p,
          i = e[1] * g;
        if (h) {
          var o = i * t - r * n;
          (r = r * t + i * n), (i = o);
        }
        return [r + c, i + f];
      }
      return (
        (b.invert = function (e) {
          var r = e[0] - c,
            i = e[1] - f;
          if (h) {
            var o = i * t + r * n;
            (r = r * t - i * n), (i = o);
          }
          return [r / p, i / g];
        }),
        (b.stream = function (t) {
          return o && a === t ? o : (o = y(v((a = t))));
        }),
        (b.postclip = function (t) {
          return arguments.length ? ((v = t), (d = e = r = i = null), _()) : v;
        }),
        (b.clipExtent = function (t) {
          return arguments.length
            ? ((v =
                null == t
                  ? ((d = e = r = i = null), xl)
                  : Ks(
                      (d = +t[0][0]),
                      (e = +t[0][1]),
                      (r = +t[1][0]),
                      (i = +t[1][1])
                    )),
              _())
            : null == d
            ? null
            : [
                [d, e],
                [r, i],
              ];
        }),
        (b.scale = function (t) {
          return arguments.length ? ((u = +t), _()) : u;
        }),
        (b.translate = function (t) {
          return arguments.length ? ((c = +t[0]), (f = +t[1]), _()) : [c, f];
        }),
        (b.angle = function (e) {
          return arguments.length
            ? ((n = $c((h = (e % 360) * Ic))), (t = Lc(h)), _())
            : h * Oc;
        }),
        (b.reflectX = function (t) {
          return arguments.length ? ((s = t ? -1 : 1), _()) : s < 0;
        }),
        (b.reflectY = function (t) {
          return arguments.length ? ((l = t ? -1 : 1), _()) : l < 0;
        }),
        (b.fitExtent = function (t, n) {
          return _h(b, t, n);
        }),
        (b.fitSize = function (t, n) {
          return bh(b, t, n);
        }),
        (b.fitWidth = function (t, n) {
          return mh(b, t, n);
        }),
        (b.fitHeight = function (t, n) {
          return xh(b, t, n);
        }),
        b
      );
    }),
    (t.geoInterpolate = function (t, n) {
      var e = t[0] * Ic,
        r = t[1] * Ic,
        i = n[0] * Ic,
        o = n[1] * Ic,
        a = Lc(r),
        u = $c(r),
        c = Lc(o),
        f = $c(o),
        s = a * Lc(e),
        l = a * $c(e),
        h = c * Lc(i),
        d = c * $c(i),
        p = 2 * Jc(Zc(tf(o - r) + a * c * tf(i - e))),
        g = $c(p),
        y = p
          ? function (t) {
              var n = $c((t *= p)) / g,
                e = $c(p - t) / g,
                r = e * s + n * h,
                i = e * l + n * d,
                o = e * u + n * f;
              return [Yc(i, r) * Oc, Yc(o, Zc(r * r + i * i)) * Oc];
            }
          : function () {
              return [e * Oc, r * Oc];
            };
      return (y.distance = p), y;
    }),
    (t.geoLength = el),
    (t.geoMercator = function () {
      return Oh(Fh).scale(961 / Fc);
    }),
    (t.geoMercatorRaw = Fh),
    (t.geoNaturalEarth1 = function () {
      return Sh(Wh).scale(175.295);
    }),
    (t.geoNaturalEarth1Raw = Wh),
    (t.geoOrthographic = function () {
      return Sh(Zh).scale(249.5).clipAngle(90.000001);
    }),
    (t.geoOrthographicRaw = Zh),
    (t.geoPath = function (t, n) {
      var e,
        r,
        i = 4.5;
      function o(t) {
        return (
          t &&
            ("function" == typeof i && r.pointRadius(+i.apply(this, arguments)),
            cf(t, e(r))),
          r.result()
        );
      }
      return (
        (o.area = function (t) {
          return cf(t, e(Al)), Al.result();
        }),
        (o.measure = function (t) {
          return cf(t, e(sh)), sh.result();
        }),
        (o.bounds = function (t) {
          return cf(t, e(Dl)), Dl.result();
        }),
        (o.centroid = function (t) {
          return cf(t, e(Vl)), Vl.result();
        }),
        (o.projection = function (n) {
          return arguments.length
            ? ((e = null == n ? ((t = null), xl) : (t = n).stream), o)
            : t;
        }),
        (o.context = function (t) {
          return arguments.length
            ? ((r = null == t ? ((n = null), new dh()) : new rh((n = t))),
              "function" != typeof i && r.pointRadius(i),
              o)
            : n;
        }),
        (o.pointRadius = function (t) {
          return arguments.length
            ? ((i = "function" == typeof t ? t : (r.pointRadius(+t), +t)), o)
            : i;
        }),
        o.projection(t).context(n)
      );
    }),
    (t.geoProjection = Sh),
    (t.geoProjectionMutator = Eh),
    (t.geoRotation = Cs),
    (t.geoStereographic = function () {
      return Sh(Kh).scale(250).clipAngle(142);
    }),
    (t.geoStereographicRaw = Kh),
    (t.geoStream = cf),
    (t.geoTransform = function (t) {
      return { stream: gh(t) };
    }),
    (t.geoTransverseMercator = function () {
      var t = Oh(Qh),
        n = t.center,
        e = t.rotate;
      return (
        (t.center = function (t) {
          return arguments.length ? n([-t[1], t[0]]) : [(t = n())[1], -t[0]];
        }),
        (t.rotate = function (t) {
          return arguments.length
            ? e([t[0], t[1], t.length > 2 ? t[2] + 90 : 90])
            : [(t = e())[0], t[1], t[2] - 90];
        }),
        e([0, 0, 90]).scale(159.155)
      );
    }),
    (t.geoTransverseMercatorRaw = Qh),
    (t.gray = function (t, n) {
      return new Ye(t, 0, 0, null == n ? 1 : n);
    }),
    (t.greatest = function (t, e = n) {
      let r,
        i = !1;
      if (1 === e.length) {
        let o;
        for (const a of t) {
          const t = e(a);
          (i ? n(t, o) > 0 : 0 === n(t, t)) && ((r = a), (o = t), (i = !0));
        }
      } else
        for (const n of t)
          (i ? e(n, r) > 0 : 0 === e(n, n)) && ((r = n), (i = !0));
      return r;
    }),
    (t.greatestIndex = function (t, e = n) {
      if (1 === e.length) return W(t, e);
      let r,
        i = -1,
        o = -1;
      for (const n of t)
        ++o, (i < 0 ? 0 === e(n, n) : e(n, r) > 0) && ((r = n), (i = o));
      return i;
    }),
    (t.group = M),
    (t.groupSort = function (t, e, r) {
      return (
        1 === e.length
          ? P(S(t, e, r), ([t, e], [r, i]) => n(e, i) || n(t, r))
          : P(M(t, r), ([t, r], [i, o]) => e(r, o) || n(t, i))
      ).map(([t]) => t);
    }),
    (t.groups = A),
    (t.hcl = Ve),
    (t.hierarchy = rd),
    (t.histogram = L),
    (t.hsl = Ne),
    (t.html = $u),
    (t.image = function (t, n) {
      return new Promise(function (e, r) {
        var i = new Image();
        for (var o in n) i[o] = n[o];
        (i.onerror = r),
          (i.onload = function () {
            e(i);
          }),
          (i.src = t);
      });
    }),
    (t.index = function (t, ...n) {
      return N(t, w, k, n);
    }),
    (t.indexes = function (t, ...n) {
      return N(t, Array.from, k, n);
    }),
    (t.interpolate = kr),
    (t.interpolateArray = function (t, n) {
      return (mr(n) ? br : xr)(t, n);
    }),
    (t.interpolateBasis = cr),
    (t.interpolateBasisClosed = fr),
    (t.interpolateBlues = G_),
    (t.interpolateBrBG = i_),
    (t.interpolateBuGn = w_),
    (t.interpolateBuPu = A_),
    (t.interpolateCividis = function (t) {
      return (
        (t = Math.max(0, Math.min(1, t))),
        "rgb(" +
          Math.max(
            0,
            Math.min(
              255,
              Math.round(
                -4.54 -
                  t *
                    (35.34 -
                      t *
                        (2381.73 - t * (6402.7 - t * (7024.72 - 2710.57 * t))))
              )
            )
          ) +
          ", " +
          Math.max(
            0,
            Math.min(
              255,
              Math.round(
                32.49 +
                  t *
                    (170.73 +
                      t * (52.82 - t * (131.46 - t * (176.58 - 67.37 * t))))
              )
            )
          ) +
          ", " +
          Math.max(
            0,
            Math.min(
              255,
              Math.round(
                81.24 +
                  t *
                    (442.36 -
                      t *
                        (2482.43 - t * (6167.24 - t * (6614.94 - 2475.67 * t))))
              )
            )
          ) +
          ")"
      );
    }),
    (t.interpolateCool = ob),
    (t.interpolateCubehelix = Gr),
    (t.interpolateCubehelixDefault = rb),
    (t.interpolateCubehelixLong = Vr),
    (t.interpolateDate = wr),
    (t.interpolateDiscrete = function (t) {
      var n = t.length;
      return function (e) {
        return t[Math.max(0, Math.min(n - 1, Math.floor(e * n)))];
      };
    }),
    (t.interpolateGnBu = S_),
    (t.interpolateGreens = $_),
    (t.interpolateGreys = Z_),
    (t.interpolateHcl = jr),
    (t.interpolateHclLong = Hr),
    (t.interpolateHsl = Br),
    (t.interpolateHslLong = Yr),
    (t.interpolateHue = function (t, n) {
      var e = hr(+t, +n);
      return function (t) {
        var n = e(t);
        return n - 360 * Math.floor(n / 360);
      };
    }),
    (t.interpolateInferno = db),
    (t.interpolateLab = function (t, n) {
      var e = pr((t = Be(t)).l, (n = Be(n)).l),
        r = pr(t.a, n.a),
        i = pr(t.b, n.b),
        o = pr(t.opacity, n.opacity);
      return function (n) {
        return (
          (t.l = e(n)), (t.a = r(n)), (t.b = i(n)), (t.opacity = o(n)), t + ""
        );
      };
    }),
    (t.interpolateMagma = hb),
    (t.interpolateNumber = Mr),
    (t.interpolateNumberArray = br),
    (t.interpolateObject = Ar),
    (t.interpolateOrRd = k_),
    (t.interpolateOranges = eb),
    (t.interpolatePRGn = a_),
    (t.interpolatePiYG = c_),
    (t.interpolatePlasma = pb),
    (t.interpolatePuBu = z_),
    (t.interpolatePuBuGn = C_),
    (t.interpolatePuOr = s_),
    (t.interpolatePuRd = q_),
    (t.interpolatePurples = Q_),
    (t.interpolateRainbow = function (t) {
      (t < 0 || t > 1) && (t -= Math.floor(t));
      var n = Math.abs(t - 0.5);
      return (
        (ab.h = 360 * t - 100),
        (ab.s = 1.5 - 1.5 * n),
        (ab.l = 0.8 - 0.9 * n),
        ab + ""
      );
    }),
    (t.interpolateRdBu = h_),
    (t.interpolateRdGy = p_),
    (t.interpolateRdPu = F_),
    (t.interpolateRdYlBu = y_),
    (t.interpolateRdYlGn = __),
    (t.interpolateReds = tb),
    (t.interpolateRgb = gr),
    (t.interpolateRgbBasis = vr),
    (t.interpolateRgbBasisClosed = _r),
    (t.interpolateRound = Nr),
    (t.interpolateSinebow = function (t) {
      var n;
      return (
        (t = (0.5 - t) * Math.PI),
        (ub.r = 255 * (n = Math.sin(t)) * n),
        (ub.g = 255 * (n = Math.sin(t + cb)) * n),
        (ub.b = 255 * (n = Math.sin(t + fb)) * n),
        ub + ""
      );
    }),
    (t.interpolateSpectral = m_),
    (t.interpolateString = Er),
    (t.interpolateTransformCss = Rr),
    (t.interpolateTransformSvg = Fr),
    (t.interpolateTurbo = function (t) {
      return (
        (t = Math.max(0, Math.min(1, t))),
        "rgb(" +
          Math.max(
            0,
            Math.min(
              255,
              Math.round(
                34.61 +
                  t *
                    (1172.33 -
                      t *
                        (10793.56 -
                          t * (33300.12 - t * (38394.49 - 14825.05 * t))))
              )
            )
          ) +
          ", " +
          Math.max(
            0,
            Math.min(
              255,
              Math.round(
                23.31 +
                  t *
                    (557.33 +
                      t *
                        (1225.33 - t * (3574.96 - t * (1073.77 + 707.56 * t))))
              )
            )
          ) +
          ", " +
          Math.max(
            0,
            Math.min(
              255,
              Math.round(
                27.2 +
                  t *
                    (3211.1 -
                      t *
                        (15327.97 - t * (27814 - t * (22569.18 - 6838.66 * t))))
              )
            )
          ) +
          ")"
      );
    }),
    (t.interpolateViridis = lb),
    (t.interpolateWarm = ib),
    (t.interpolateYlGn = B_),
    (t.interpolateYlGnBu = I_),
    (t.interpolateYlOrBr = L_),
    (t.interpolateYlOrRd = H_),
    (t.interpolateZoom = Ir),
    (t.interrupt = mi),
    (t.intersection = function (t, ...n) {
      (t = new Set(t)), (n = n.map(ot));
      t: for (const e of t)
        for (const r of n)
          if (!r.has(e)) {
            t.delete(e);
            continue t;
          }
      return t;
    }),
    (t.interval = function (t, n, e) {
      var r = new ui(),
        i = n;
      return null == n
        ? (r.restart(t, n, e), r)
        : ((r._restart = r.restart),
          (r.restart = function (t, n, e) {
            (n = +n),
              (e = null == e ? oi() : +e),
              r._restart(
                function o(a) {
                  (a += i), r._restart(o, (i += n), e), t(a);
                },
                n,
                e
              );
          }),
          r.restart(t, n, e),
          r);
    }),
    (t.isoFormat = Rv),
    (t.isoParse = Fv),
    (t.json = function (t, n) {
      return fetch(t, n).then(Xu);
    }),
    (t.lab = Be),
    (t.lch = function (t, n, e, r) {
      return 1 === arguments.length
        ? Ge(t)
        : new $e(e, n, t, null == r ? 1 : r);
    }),
    (t.least = function (t, e = n) {
      let r,
        i = !1;
      if (1 === e.length) {
        let o;
        for (const a of t) {
          const t = e(a);
          (i ? n(t, o) < 0 : 0 === n(t, t)) && ((r = a), (o = t), (i = !0));
        }
      } else
        for (const n of t)
          (i ? e(n, r) < 0 : 0 === e(n, n)) && ((r = n), (i = !0));
      return r;
    }),
    (t.leastIndex = tt),
    (t.line = Lb),
    (t.lineRadial = Zb),
    (t.linkHorizontal = function () {
      return nm(em);
    }),
    (t.linkRadial = function () {
      var t = nm(im);
      return (t.angle = t.x), delete t.x, (t.radius = t.y), delete t.y, t;
    }),
    (t.linkVertical = function () {
      return nm(rm);
    }),
    (t.local = In),
    (t.map = function (t, n) {
      if ("function" != typeof t[Symbol.iterator])
        throw new TypeError("values is not iterable");
      if ("function" != typeof n)
        throw new TypeError("mapper is not a function");
      return Array.from(t, (e, r) => n(e, r, t));
    }),
    (t.matcher = zt),
    (t.max = j),
    (t.maxIndex = W),
    (t.mean = function (t, n) {
      let e = 0,
        r = 0;
      if (void 0 === n)
        for (let n of t) null != n && (n = +n) >= n && (++e, (r += n));
      else {
        let i = -1;
        for (let o of t)
          null != (o = n(o, ++i, t)) && (o = +o) >= o && (++e, (r += o));
      }
      if (e) return r / e;
    }),
    (t.median = function (t, n) {
      return V(t, 0.5, n);
    }),
    (t.merge = Z),
    (t.min = H),
    (t.minIndex = K),
    (t.mode = function (t, n) {
      const e = new y();
      if (void 0 === n)
        for (let n of t) null != n && n >= n && e.set(n, (e.get(n) || 0) + 1);
      else {
        let r = -1;
        for (let i of t)
          null != (i = n(i, ++r, t)) && i >= i && e.set(i, (e.get(i) || 0) + 1);
      }
      let r,
        i = 0;
      for (const [t, n] of e) n > i && ((i = n), (r = t));
      return r;
    }),
    (t.namespace = Mt),
    (t.namespaces = wt),
    (t.nice = B),
    (t.now = oi),
    (t.pack = function () {
      var t = null,
        n = 1,
        e = 1,
        r = Ad;
      function i(i) {
        return (
          (i.x = n / 2),
          (i.y = e / 2),
          t
            ? i.eachBefore(Ed(t)).eachAfter(kd(r, 0.5)).eachBefore(Nd(1))
            : i
                .eachBefore(Ed(Sd))
                .eachAfter(kd(Ad, 1))
                .eachAfter(kd(r, i.r / Math.min(n, e)))
                .eachBefore(Nd(Math.min(n, e) / (2 * i.r))),
          i
        );
      }
      return (
        (i.radius = function (n) {
          return arguments.length ? ((t = wd(n)), i) : t;
        }),
        (i.size = function (t) {
          return arguments.length ? ((n = +t[0]), (e = +t[1]), i) : [n, e];
        }),
        (i.padding = function (t) {
          return arguments.length
            ? ((r = "function" == typeof t ? t : Td(+t)), i)
            : r;
        }),
        i
      );
    }),
    (t.packEnclose = fd),
    (t.packSiblings = function (t) {
      return xd(t), t;
    }),
    (t.pairs = function (t, n = Q) {
      const e = [];
      let r,
        i = !1;
      for (const o of t) i && e.push(n(r, o)), (r = o), (i = !0);
      return e;
    }),
    (t.partition = function () {
      var t = 1,
        n = 1,
        e = 0,
        r = !1;
      function i(i) {
        var o = i.height + 1;
        return (
          (i.x0 = i.y0 = e),
          (i.x1 = t),
          (i.y1 = n / o),
          i.eachBefore(
            (function (t, n) {
              return function (r) {
                r.children &&
                  Pd(
                    r,
                    r.x0,
                    (t * (r.depth + 1)) / n,
                    r.x1,
                    (t * (r.depth + 2)) / n
                  );
                var i = r.x0,
                  o = r.y0,
                  a = r.x1 - e,
                  u = r.y1 - e;
                a < i && (i = a = (i + a) / 2),
                  u < o && (o = u = (o + u) / 2),
                  (r.x0 = i),
                  (r.y0 = o),
                  (r.x1 = a),
                  (r.y1 = u);
              };
            })(n, o)
          ),
          r && i.eachBefore(Cd),
          i
        );
      }
      return (
        (i.round = function (t) {
          return arguments.length ? ((r = !!t), i) : r;
        }),
        (i.size = function (e) {
          return arguments.length ? ((t = +e[0]), (n = +e[1]), i) : [t, n];
        }),
        (i.padding = function (t) {
          return arguments.length ? ((e = +t), i) : e;
        }),
        i
      );
    }),
    (t.path = pa),
    (t.permute = C),
    (t.pie = function () {
      var t = Xb,
        n = Hb,
        e = null,
        r = gb(0),
        i = gb(Sb),
        o = gb(0);
      function a(a) {
        var u,
          c,
          f,
          s,
          l,
          h = (a = Ob(a)).length,
          d = 0,
          p = new Array(h),
          g = new Array(h),
          y = +r.apply(this, arguments),
          v = Math.min(Sb, Math.max(-Sb, i.apply(this, arguments) - y)),
          _ = Math.min(Math.abs(v) / h, o.apply(this, arguments)),
          b = _ * (v < 0 ? -1 : 1);
        for (u = 0; u < h; ++u)
          (l = g[(p[u] = u)] = +t(a[u], u, a)) > 0 && (d += l);
        for (
          null != n
            ? p.sort(function (t, e) {
                return n(g[t], g[e]);
              })
            : null != e &&
              p.sort(function (t, n) {
                return e(a[t], a[n]);
              }),
            u = 0,
            f = d ? (v - h * b) / d : 0;
          u < h;
          ++u, y = s
        )
          (c = p[u]),
            (s = y + ((l = g[c]) > 0 ? l * f : 0) + b),
            (g[c] = {
              data: a[c],
              index: u,
              value: l,
              startAngle: y,
              endAngle: s,
              padAngle: _,
            });
        return g;
      }
      return (
        (a.value = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : gb(+n)), a)
            : t;
        }),
        (a.sortValues = function (t) {
          return arguments.length ? ((n = t), (e = null), a) : n;
        }),
        (a.sort = function (t) {
          return arguments.length ? ((e = t), (n = null), a) : e;
        }),
        (a.startAngle = function (t) {
          return arguments.length
            ? ((r = "function" == typeof t ? t : gb(+t)), a)
            : r;
        }),
        (a.endAngle = function (t) {
          return arguments.length
            ? ((i = "function" == typeof t ? t : gb(+t)), a)
            : i;
        }),
        (a.padAngle = function (t) {
          return arguments.length
            ? ((o = "function" == typeof t ? t : gb(+t)), a)
            : o;
        }),
        a
      );
    }),
    (t.piecewise = $r),
    (t.pointRadial = Qb),
    (t.pointer = Yn),
    (t.pointers = function (t, n) {
      return (
        t.target &&
          ((t = Bn(t)),
          void 0 === n && (n = t.currentTarget),
          (t = t.touches || [t])),
        Array.from(t, (t) => Yn(t, n))
      );
    }),
    (t.polygonArea = function (t) {
      for (var n, e = -1, r = t.length, i = t[r - 1], o = 0; ++e < r; )
        (n = i), (i = t[e]), (o += n[1] * i[0] - n[0] * i[1]);
      return o / 2;
    }),
    (t.polygonCentroid = function (t) {
      for (
        var n, e, r = -1, i = t.length, o = 0, a = 0, u = t[i - 1], c = 0;
        ++r < i;

      )
        (n = u),
          (u = t[r]),
          (c += e = n[0] * u[1] - u[0] * n[1]),
          (o += (n[0] + u[0]) * e),
          (a += (n[1] + u[1]) * e);
      return [o / (c *= 3), a / c];
    }),
    (t.polygonContains = function (t, n) {
      for (
        var e,
          r,
          i = t.length,
          o = t[i - 1],
          a = n[0],
          u = n[1],
          c = o[0],
          f = o[1],
          s = !1,
          l = 0;
        l < i;
        ++l
      )
        (e = (o = t[l])[0]),
          (r = o[1]) > u != f > u &&
            a < ((c - e) * (u - r)) / (f - r) + e &&
            (s = !s),
          (c = e),
          (f = r);
      return s;
    }),
    (t.polygonHull = function (t) {
      if ((e = t.length) < 3) return null;
      var n,
        e,
        r = new Array(e),
        i = new Array(e);
      for (n = 0; n < e; ++n) r[n] = [+t[n][0], +t[n][1], n];
      for (r.sort($d), n = 0; n < e; ++n) i[n] = [r[n][0], -r[n][1]];
      var o = Wd(r),
        a = Wd(i),
        u = a[0] === o[0],
        c = a[a.length - 1] === o[o.length - 1],
        f = [];
      for (n = o.length - 1; n >= 0; --n) f.push(t[r[o[n]][2]]);
      for (n = +u; n < a.length - c; ++n) f.push(t[r[a[n]][2]]);
      return f;
    }),
    (t.polygonLength = function (t) {
      for (
        var n, e, r = -1, i = t.length, o = t[i - 1], a = o[0], u = o[1], c = 0;
        ++r < i;

      )
        (n = a),
          (e = u),
          (n -= a = (o = t[r])[0]),
          (e -= u = o[1]),
          (c += Math.hypot(n, e));
      return c;
    }),
    (t.precisionFixed = kc),
    (t.precisionPrefix = Nc),
    (t.precisionRound = Cc),
    (t.quadtree = tc),
    (t.quantile = V),
    (t.quantileSorted = $),
    (t.quantize = function (t, n) {
      for (var e = new Array(n), r = 0; r < n; ++r) e[r] = t(r / (n - 1));
      return e;
    }),
    (t.quickselect = X),
    (t.radialArea = Kb),
    (t.radialLine = Zb),
    (t.randomBates = ep),
    (t.randomBernoulli = op),
    (t.randomBeta = cp),
    (t.randomBinomial = fp),
    (t.randomCauchy = lp),
    (t.randomExponential = rp),
    (t.randomGamma = up),
    (t.randomGeometric = ap),
    (t.randomInt = Qd),
    (t.randomIrwinHall = np),
    (t.randomLcg = function (t = Math.random()) {
      let n = 0 | (0 <= t && t < 1 ? t / pp : Math.abs(t));
      return () => ((n = (1664525 * n + 1013904223) | 0), pp * (n >>> 0));
    }),
    (t.randomLogNormal = tp),
    (t.randomLogistic = hp),
    (t.randomNormal = Jd),
    (t.randomPareto = ip),
    (t.randomPoisson = dp),
    (t.randomUniform = Kd),
    (t.randomWeibull = sp),
    (t.range = J),
    (t.reduce = function (t, n, e) {
      if ("function" != typeof n)
        throw new TypeError("reducer is not a function");
      const r = t[Symbol.iterator]();
      let i,
        o,
        a = -1;
      if (arguments.length < 3) {
        if ((({ done: i, value: e } = r.next()), i)) return;
        ++a;
      }
      for (; ({ done: i, value: o } = r.next()), !i; ) e = n(e, o, ++a, t);
      return e;
    }),
    (t.reverse = function (t) {
      if ("function" != typeof t[Symbol.iterator])
        throw new TypeError("values is not iterable");
      return Array.from(t).reverse();
    }),
    (t.rgb = we),
    (t.ribbon = function () {
      return Aa();
    }),
    (t.ribbonArrow = function () {
      return Aa(Ma);
    }),
    (t.rollup = S),
    (t.rollups = E),
    (t.scaleBand = bp),
    (t.scaleDiverging = function t() {
      var n = Pp(jv()(Mp));
      return (
        (n.copy = function () {
          return Yv(n, t());
        }),
        yp.apply(n, arguments)
      );
    }),
    (t.scaleDivergingLog = function t() {
      var n = Up(jv()).domain([0.1, 1, 10]);
      return (
        (n.copy = function () {
          return Yv(n, t()).base(n.base());
        }),
        yp.apply(n, arguments)
      );
    }),
    (t.scaleDivergingPow = Hv),
    (t.scaleDivergingSqrt = function () {
      return Hv.apply(null, arguments).exponent(0.5);
    }),
    (t.scaleDivergingSymlog = function t() {
      var n = Lp(jv());
      return (
        (n.copy = function () {
          return Yv(n, t()).constant(n.constant());
        }),
        yp.apply(n, arguments)
      );
    }),
    (t.scaleIdentity = function t(n) {
      var e;
      function r(t) {
        return null == t || isNaN((t = +t)) ? e : t;
      }
      return (
        (r.invert = r),
        (r.domain = r.range =
          function (t) {
            return arguments.length ? ((n = Array.from(t, xp)), r) : n.slice();
          }),
        (r.unknown = function (t) {
          return arguments.length ? ((e = t), r) : e;
        }),
        (r.copy = function () {
          return t(n).unknown(e);
        }),
        (n = arguments.length ? Array.from(n, xp) : [0, 1]),
        Pp(r)
      );
    }),
    (t.scaleImplicit = vp),
    (t.scaleLinear = function t() {
      var n = Np();
      return (
        (n.copy = function () {
          return Ep(n, t());
        }),
        gp.apply(n, arguments),
        Pp(n)
      );
    }),
    (t.scaleLog = function t() {
      var n = Up(kp()).domain([1, 10]);
      return (
        (n.copy = function () {
          return Ep(n, t()).base(n.base());
        }),
        gp.apply(n, arguments),
        n
      );
    }),
    (t.scaleOrdinal = _p),
    (t.scalePoint = function () {
      return mp(bp.apply(null, arguments).paddingInner(1));
    }),
    (t.scalePow = Vp),
    (t.scaleQuantile = function t() {
      var e,
        r = [],
        i = [],
        a = [];
      function u() {
        var t = 0,
          n = Math.max(1, i.length);
        for (a = new Array(n - 1); ++t < n; ) a[t - 1] = $(r, t / n);
        return c;
      }
      function c(t) {
        return null == t || isNaN((t = +t)) ? e : i[o(a, t)];
      }
      return (
        (c.invertExtent = function (t) {
          var n = i.indexOf(t);
          return n < 0
            ? [NaN, NaN]
            : [n > 0 ? a[n - 1] : r[0], n < a.length ? a[n] : r[r.length - 1]];
        }),
        (c.domain = function (t) {
          if (!arguments.length) return r.slice();
          r = [];
          for (let n of t) null == n || isNaN((n = +n)) || r.push(n);
          return r.sort(n), u();
        }),
        (c.range = function (t) {
          return arguments.length ? ((i = Array.from(t)), u()) : i.slice();
        }),
        (c.unknown = function (t) {
          return arguments.length ? ((e = t), c) : e;
        }),
        (c.quantiles = function () {
          return a.slice();
        }),
        (c.copy = function () {
          return t().domain(r).range(i).unknown(e);
        }),
        gp.apply(c, arguments)
      );
    }),
    (t.scaleQuantize = function t() {
      var n,
        e = 0,
        r = 1,
        i = 1,
        a = [0.5],
        u = [0, 1];
      function c(t) {
        return null != t && t <= t ? u[o(a, t, 0, i)] : n;
      }
      function f() {
        var t = -1;
        for (a = new Array(i); ++t < i; )
          a[t] = ((t + 1) * r - (t - i) * e) / (i + 1);
        return c;
      }
      return (
        (c.domain = function (t) {
          return arguments.length
            ? (([e, r] = t), (e = +e), (r = +r), f())
            : [e, r];
        }),
        (c.range = function (t) {
          return arguments.length
            ? ((i = (u = Array.from(t)).length - 1), f())
            : u.slice();
        }),
        (c.invertExtent = function (t) {
          var n = u.indexOf(t);
          return n < 0
            ? [NaN, NaN]
            : n < 1
            ? [e, a[0]]
            : n >= i
            ? [a[i - 1], r]
            : [a[n - 1], a[n]];
        }),
        (c.unknown = function (t) {
          return arguments.length ? ((n = t), c) : c;
        }),
        (c.thresholds = function () {
          return a.slice();
        }),
        (c.copy = function () {
          return t().domain([e, r]).range(u).unknown(n);
        }),
        gp.apply(Pp(c), arguments)
      );
    }),
    (t.scaleRadial = function t() {
      var n,
        e = Np(),
        r = [0, 1],
        i = !1;
      function o(t) {
        var r = Wp(e(t));
        return isNaN(r) ? n : i ? Math.round(r) : r;
      }
      return (
        (o.invert = function (t) {
          return e.invert($p(t));
        }),
        (o.domain = function (t) {
          return arguments.length ? (e.domain(t), o) : e.domain();
        }),
        (o.range = function (t) {
          return arguments.length
            ? (e.range((r = Array.from(t, xp)).map($p)), o)
            : r.slice();
        }),
        (o.rangeRound = function (t) {
          return o.range(t).round(!0);
        }),
        (o.round = function (t) {
          return arguments.length ? ((i = !!t), o) : i;
        }),
        (o.clamp = function (t) {
          return arguments.length ? (e.clamp(t), o) : e.clamp();
        }),
        (o.unknown = function (t) {
          return arguments.length ? ((n = t), o) : n;
        }),
        (o.copy = function () {
          return t(e.domain(), r).round(i).clamp(e.clamp()).unknown(n);
        }),
        gp.apply(o, arguments),
        Pp(o)
      );
    }),
    (t.scaleSequential = function t() {
      var n = Pp(Bv()(Mp));
      return (
        (n.copy = function () {
          return Yv(n, t());
        }),
        yp.apply(n, arguments)
      );
    }),
    (t.scaleSequentialLog = function t() {
      var n = Up(Bv()).domain([1, 10]);
      return (
        (n.copy = function () {
          return Yv(n, t()).base(n.base());
        }),
        yp.apply(n, arguments)
      );
    }),
    (t.scaleSequentialPow = Lv),
    (t.scaleSequentialQuantile = function t() {
      var e = [],
        r = Mp;
      function i(t) {
        if (null != t && !isNaN((t = +t)))
          return r((o(e, t, 1) - 1) / (e.length - 1));
      }
      return (
        (i.domain = function (t) {
          if (!arguments.length) return e.slice();
          e = [];
          for (let n of t) null == n || isNaN((n = +n)) || e.push(n);
          return e.sort(n), i;
        }),
        (i.interpolator = function (t) {
          return arguments.length ? ((r = t), i) : r;
        }),
        (i.range = function () {
          return e.map((t, n) => r(n / (e.length - 1)));
        }),
        (i.quantiles = function (t) {
          return Array.from({ length: t + 1 }, (n, r) => V(e, r / t));
        }),
        (i.copy = function () {
          return t(r).domain(e);
        }),
        yp.apply(i, arguments)
      );
    }),
    (t.scaleSequentialSqrt = function () {
      return Lv.apply(null, arguments).exponent(0.5);
    }),
    (t.scaleSequentialSymlog = function t() {
      var n = Lp(Bv());
      return (
        (n.copy = function () {
          return Yv(n, t()).constant(n.constant());
        }),
        yp.apply(n, arguments)
      );
    }),
    (t.scaleSqrt = function () {
      return Vp.apply(null, arguments).exponent(0.5);
    }),
    (t.scaleSymlog = function t() {
      var n = Lp(kp());
      return (
        (n.copy = function () {
          return Ep(n, t()).constant(n.constant());
        }),
        gp.apply(n, arguments)
      );
    }),
    (t.scaleThreshold = function t() {
      var n,
        e = [0.5],
        r = [0, 1],
        i = 1;
      function a(t) {
        return null != t && t <= t ? r[o(e, t, 0, i)] : n;
      }
      return (
        (a.domain = function (t) {
          return arguments.length
            ? ((e = Array.from(t)), (i = Math.min(e.length, r.length - 1)), a)
            : e.slice();
        }),
        (a.range = function (t) {
          return arguments.length
            ? ((r = Array.from(t)), (i = Math.min(e.length, r.length - 1)), a)
            : r.slice();
        }),
        (a.invertExtent = function (t) {
          var n = r.indexOf(t);
          return [e[n - 1], e[n]];
        }),
        (a.unknown = function (t) {
          return arguments.length ? ((n = t), a) : n;
        }),
        (a.copy = function () {
          return t().domain(e).range(r).unknown(n);
        }),
        gp.apply(a, arguments)
      );
    }),
    (t.scaleTime = function () {
      return gp.apply(
        Uv(fy, sy, Dg, Pg, vg, pg, hg, sg, cg, t.timeFormat).domain([
          new Date(2e3, 0, 1),
          new Date(2e3, 0, 2),
        ]),
        arguments
      );
    }),
    (t.scaleUtc = function () {
      return gp.apply(
        Uv(uy, cy, iy, ey, Lg, Ug, Og, Rg, cg, t.utcFormat).domain([
          Date.UTC(2e3, 0, 1),
          Date.UTC(2e3, 0, 2),
        ]),
        arguments
      );
    }),
    (t.scan = function (t, n) {
      const e = tt(t, n);
      return e < 0 ? void 0 : e;
    }),
    (t.schemeAccent = Vv),
    (t.schemeBlues = X_),
    (t.schemeBrBG = r_),
    (t.schemeBuGn = x_),
    (t.schemeBuPu = M_),
    (t.schemeCategory10 = Gv),
    (t.schemeDark2 = $v),
    (t.schemeGnBu = T_),
    (t.schemeGreens = V_),
    (t.schemeGreys = W_),
    (t.schemeOrRd = E_),
    (t.schemeOranges = nb),
    (t.schemePRGn = o_),
    (t.schemePaired = Wv),
    (t.schemePastel1 = Zv),
    (t.schemePastel2 = Kv),
    (t.schemePiYG = u_),
    (t.schemePuBu = P_),
    (t.schemePuBuGn = N_),
    (t.schemePuOr = f_),
    (t.schemePuRd = D_),
    (t.schemePurples = K_),
    (t.schemeRdBu = l_),
    (t.schemeRdGy = d_),
    (t.schemeRdPu = R_),
    (t.schemeRdYlBu = g_),
    (t.schemeRdYlGn = v_),
    (t.schemeReds = J_),
    (t.schemeSet1 = Qv),
    (t.schemeSet2 = Jv),
    (t.schemeSet3 = t_),
    (t.schemeSpectral = b_),
    (t.schemeTableau10 = n_),
    (t.schemeYlGn = U_),
    (t.schemeYlGnBu = O_),
    (t.schemeYlOrBr = Y_),
    (t.schemeYlOrRd = j_),
    (t.select = Fn),
    (t.selectAll = function (t) {
      return "string" == typeof t
        ? new qn([document.querySelectorAll(t)], [document.documentElement])
        : new qn([Nt(t)], Dn);
    }),
    (t.selection = Rn),
    (t.selector = kt),
    (t.selectorAll = Pt),
    (t.shuffle = nt),
    (t.shuffler = et),
    (t.some = function (t, n) {
      if ("function" != typeof n) throw new TypeError("test is not a function");
      let e = -1;
      for (const r of t) if (n(r, ++e, t)) return !0;
      return !1;
    }),
    (t.sort = P),
    (t.stack = function () {
      var t = gb([]),
        n = rx,
        e = ex,
        r = ix;
      function i(i) {
        var o,
          a,
          u = Array.from(t.apply(this, arguments), ox),
          c = u.length,
          f = -1;
        for (const t of i)
          for (o = 0, ++f; o < c; ++o)
            (u[o][f] = [0, +r(t, u[o].key, f, i)]).data = t;
        for (o = 0, a = Ob(n(u)); o < c; ++o) u[a[o]].index = o;
        return e(u, a), u;
      }
      return (
        (i.keys = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : gb(Array.from(n))), i)
            : t;
        }),
        (i.value = function (t) {
          return arguments.length
            ? ((r = "function" == typeof t ? t : gb(+t)), i)
            : r;
        }),
        (i.order = function (t) {
          return arguments.length
            ? ((n =
                null == t
                  ? rx
                  : "function" == typeof t
                  ? t
                  : gb(Array.from(t))),
              i)
            : n;
        }),
        (i.offset = function (t) {
          return arguments.length ? ((e = null == t ? ex : t), i) : e;
        }),
        i
      );
    }),
    (t.stackOffsetDiverging = function (t, n) {
      if ((u = t.length) > 0)
        for (var e, r, i, o, a, u, c = 0, f = t[n[0]].length; c < f; ++c)
          for (o = a = 0, e = 0; e < u; ++e)
            (i = (r = t[n[e]][c])[1] - r[0]) > 0
              ? ((r[0] = o), (r[1] = o += i))
              : i < 0
              ? ((r[1] = a), (r[0] = a += i))
              : ((r[0] = 0), (r[1] = i));
    }),
    (t.stackOffsetExpand = function (t, n) {
      if ((r = t.length) > 0) {
        for (var e, r, i, o = 0, a = t[0].length; o < a; ++o) {
          for (i = e = 0; e < r; ++e) i += t[e][o][1] || 0;
          if (i) for (e = 0; e < r; ++e) t[e][o][1] /= i;
        }
        ex(t, n);
      }
    }),
    (t.stackOffsetNone = ex),
    (t.stackOffsetSilhouette = function (t, n) {
      if ((e = t.length) > 0) {
        for (var e, r = 0, i = t[n[0]], o = i.length; r < o; ++r) {
          for (var a = 0, u = 0; a < e; ++a) u += t[a][r][1] || 0;
          i[r][1] += i[r][0] = -u / 2;
        }
        ex(t, n);
      }
    }),
    (t.stackOffsetWiggle = function (t, n) {
      if ((i = t.length) > 0 && (r = (e = t[n[0]]).length) > 0) {
        for (var e, r, i, o = 0, a = 1; a < r; ++a) {
          for (var u = 0, c = 0, f = 0; u < i; ++u) {
            for (
              var s = t[n[u]],
                l = s[a][1] || 0,
                h = (l - (s[a - 1][1] || 0)) / 2,
                d = 0;
              d < u;
              ++d
            ) {
              var p = t[n[d]];
              h += (p[a][1] || 0) - (p[a - 1][1] || 0);
            }
            (c += l), (f += h * l);
          }
          (e[a - 1][1] += e[a - 1][0] = o), c && (o -= f / c);
        }
        (e[a - 1][1] += e[a - 1][0] = o), ex(t, n);
      }
    }),
    (t.stackOrderAppearance = ax),
    (t.stackOrderAscending = cx),
    (t.stackOrderDescending = function (t) {
      return cx(t).reverse();
    }),
    (t.stackOrderInsideOut = function (t) {
      var n,
        e,
        r = t.length,
        i = t.map(fx),
        o = ax(t),
        a = 0,
        u = 0,
        c = [],
        f = [];
      for (n = 0; n < r; ++n)
        (e = o[n]), a < u ? ((a += i[e]), c.push(e)) : ((u += i[e]), f.push(e));
      return f.reverse().concat(c);
    }),
    (t.stackOrderNone = rx),
    (t.stackOrderReverse = function (t) {
      return rx(t).reverse();
    }),
    (t.stratify = function () {
      var t = qd,
        n = Rd;
      function e(e) {
        var r,
          i,
          o,
          a,
          u,
          c,
          f,
          s = Array.from(e),
          l = s.length,
          h = new Map();
        for (i = 0; i < l; ++i)
          (r = s[i]),
            (u = s[i] = new cd(r)),
            null != (c = t(r, i, e)) &&
              (c += "") &&
              ((f = u.id = c), h.set(f, h.has(f) ? Dd : u)),
            null != (c = n(r, i, e)) && (c += "") && (u.parent = c);
        for (i = 0; i < l; ++i)
          if ((c = (u = s[i]).parent)) {
            if (!(a = h.get(c))) throw new Error("missing: " + c);
            if (a === Dd) throw new Error("ambiguous: " + c);
            a.children ? a.children.push(u) : (a.children = [u]),
              (u.parent = a);
          } else {
            if (o) throw new Error("multiple roots");
            o = u;
          }
        if (!o) throw new Error("no root");
        if (
          ((o.parent = zd),
          o
            .eachBefore(function (t) {
              (t.depth = t.parent.depth + 1), --l;
            })
            .eachBefore(ud),
          (o.parent = null),
          l > 0)
        )
          throw new Error("cycle");
        return o;
      }
      return (
        (e.id = function (n) {
          return arguments.length ? ((t = Md(n)), e) : t;
        }),
        (e.parentId = function (t) {
          return arguments.length ? ((n = Md(t)), e) : n;
        }),
        e
      );
    }),
    (t.style = en),
    (t.subset = function (t, n) {
      return at(n, t);
    }),
    (t.sum = function (t, n) {
      let e = 0;
      if (void 0 === n) for (let n of t) (n = +n) && (e += n);
      else {
        let r = -1;
        for (let i of t) (i = +n(i, ++r, t)) && (e += i);
      }
      return e;
    }),
    (t.superset = at),
    (t.svg = Wu),
    (t.symbol = function (t, n) {
      var e = null;
      function r() {
        var r;
        if (
          (e || (e = r = pa()),
          t.apply(this, arguments).draw(e, +n.apply(this, arguments)),
          r)
        )
          return (e = null), r + "" || null;
      }
      return (
        (t = "function" == typeof t ? t : gb(t || om)),
        (n = "function" == typeof n ? n : gb(void 0 === n ? 64 : +n)),
        (r.type = function (n) {
          return arguments.length
            ? ((t = "function" == typeof n ? n : gb(n)), r)
            : t;
        }),
        (r.size = function (t) {
          return arguments.length
            ? ((n = "function" == typeof t ? t : gb(+t)), r)
            : n;
        }),
        (r.context = function (t) {
          return arguments.length ? ((e = null == t ? null : t), r) : e;
        }),
        r
      );
    }),
    (t.symbolCircle = om),
    (t.symbolCross = am),
    (t.symbolDiamond = fm),
    (t.symbolSquare = pm),
    (t.symbolStar = dm),
    (t.symbolTriangle = ym),
    (t.symbolWye = xm),
    (t.symbols = wm),
    (t.text = Yu),
    (t.thresholdFreedmanDiaconis = function (t, n, e) {
      return Math.ceil(
        (e - n) / (2 * (V(t, 0.75) - V(t, 0.25)) * Math.pow(c(t), -1 / 3))
      );
    }),
    (t.thresholdScott = function (t, n, e) {
      return Math.ceil((e - n) / (3.5 * d(t) * Math.pow(c(t), -1 / 3)));
    }),
    (t.thresholdSturges = Y),
    (t.tickFormat = Cp),
    (t.tickIncrement = I),
    (t.tickStep = U),
    (t.ticks = O),
    (t.timeDay = pg),
    (t.timeDays = gg),
    (t.timeFormatDefaultLocale = Dv),
    (t.timeFormatLocale = py),
    (t.timeFriday = wg),
    (t.timeFridays = Ng),
    (t.timeHour = hg),
    (t.timeHours = dg),
    (t.timeInterval = Qp),
    (t.timeMillisecond = Jp),
    (t.timeMilliseconds = tg),
    (t.timeMinute = sg),
    (t.timeMinutes = lg),
    (t.timeMonday = _g),
    (t.timeMondays = Tg),
    (t.timeMonth = Pg),
    (t.timeMonths = zg),
    (t.timeSaturday = Mg),
    (t.timeSaturdays = Cg),
    (t.timeSecond = cg),
    (t.timeSeconds = fg),
    (t.timeSunday = vg),
    (t.timeSundays = Ag),
    (t.timeThursday = xg),
    (t.timeThursdays = kg),
    (t.timeTickInterval = sy),
    (t.timeTicks = fy),
    (t.timeTuesday = bg),
    (t.timeTuesdays = Sg),
    (t.timeWednesday = mg),
    (t.timeWednesdays = Eg),
    (t.timeWeek = vg),
    (t.timeWeeks = Ag),
    (t.timeYear = Dg),
    (t.timeYears = qg),
    (t.timeout = di),
    (t.timer = ci),
    (t.timerFlush = fi),
    (t.transition = Wi),
    (t.transpose = rt),
    (t.tree = function () {
      var t = Fd,
        n = 1,
        e = 1,
        r = null;
      function i(i) {
        var c = (function (t) {
          for (var n, e, r, i, o, a = new Yd(t, 0), u = [a]; (n = u.pop()); )
            if ((r = n._.children))
              for (
                n.children = new Array((o = r.length)), i = o - 1;
                i >= 0;
                --i
              )
                u.push((e = n.children[i] = new Yd(r[i], i))), (e.parent = n);
          return ((a.parent = new Yd(null, 0)).children = [a]), a;
        })(i);
        if ((c.eachAfter(o), (c.parent.m = -c.z), c.eachBefore(a), r))
          i.eachBefore(u);
        else {
          var f = i,
            s = i,
            l = i;
          i.eachBefore(function (t) {
            t.x < f.x && (f = t),
              t.x > s.x && (s = t),
              t.depth > l.depth && (l = t);
          });
          var h = f === s ? 1 : t(f, s) / 2,
            d = h - f.x,
            p = n / (s.x + h + d),
            g = e / (l.depth || 1);
          i.eachBefore(function (t) {
            (t.x = (t.x + d) * p), (t.y = t.depth * g);
          });
        }
        return i;
      }
      function o(n) {
        var e = n.children,
          r = n.parent.children,
          i = n.i ? r[n.i - 1] : null;
        if (e) {
          !(function (t) {
            for (var n, e = 0, r = 0, i = t.children, o = i.length; --o >= 0; )
              ((n = i[o]).z += e), (n.m += e), (e += n.s + (r += n.c));
          })(n);
          var o = (e[0].z + e[e.length - 1].z) / 2;
          i ? ((n.z = i.z + t(n._, i._)), (n.m = n.z - o)) : (n.z = o);
        } else i && (n.z = i.z + t(n._, i._));
        n.parent.A = (function (n, e, r) {
          if (e) {
            for (
              var i,
                o = n,
                a = n,
                u = e,
                c = o.parent.children[0],
                f = o.m,
                s = a.m,
                l = u.m,
                h = c.m;
              (u = Id(u)), (o = Od(o)), u && o;

            )
              (c = Od(c)),
                ((a = Id(a)).a = n),
                (i = u.z + l - o.z - f + t(u._, o._)) > 0 &&
                  (Ud(Bd(u, n, r), n, i), (f += i), (s += i)),
                (l += u.m),
                (f += o.m),
                (h += c.m),
                (s += a.m);
            u && !Id(a) && ((a.t = u), (a.m += l - s)),
              o && !Od(c) && ((c.t = o), (c.m += f - h), (r = n));
          }
          return r;
        })(n, i, n.parent.A || r[0]);
      }
      function a(t) {
        (t._.x = t.z + t.parent.m), (t.m += t.parent.m);
      }
      function u(t) {
        (t.x *= n), (t.y = t.depth * e);
      }
      return (
        (i.separation = function (n) {
          return arguments.length ? ((t = n), i) : t;
        }),
        (i.size = function (t) {
          return arguments.length
            ? ((r = !1), (n = +t[0]), (e = +t[1]), i)
            : r
            ? null
            : [n, e];
        }),
        (i.nodeSize = function (t) {
          return arguments.length
            ? ((r = !0), (n = +t[0]), (e = +t[1]), i)
            : r
            ? [n, e]
            : null;
        }),
        i
      );
    }),
    (t.treemap = function () {
      var t = Xd,
        n = !1,
        e = 1,
        r = 1,
        i = [0],
        o = Ad,
        a = Ad,
        u = Ad,
        c = Ad,
        f = Ad;
      function s(t) {
        return (
          (t.x0 = t.y0 = 0),
          (t.x1 = e),
          (t.y1 = r),
          t.eachBefore(l),
          (i = [0]),
          n && t.eachBefore(Cd),
          t
        );
      }
      function l(n) {
        var e = i[n.depth],
          r = n.x0 + e,
          s = n.y0 + e,
          l = n.x1 - e,
          h = n.y1 - e;
        l < r && (r = l = (r + l) / 2),
          h < s && (s = h = (s + h) / 2),
          (n.x0 = r),
          (n.y0 = s),
          (n.x1 = l),
          (n.y1 = h),
          n.children &&
            ((e = i[n.depth + 1] = o(n) / 2),
            (r += f(n) - e),
            (s += a(n) - e),
            (l -= u(n) - e) < r && (r = l = (r + l) / 2),
            (h -= c(n) - e) < s && (s = h = (s + h) / 2),
            t(n, r, s, l, h));
      }
      return (
        (s.round = function (t) {
          return arguments.length ? ((n = !!t), s) : n;
        }),
        (s.size = function (t) {
          return arguments.length ? ((e = +t[0]), (r = +t[1]), s) : [e, r];
        }),
        (s.tile = function (n) {
          return arguments.length ? ((t = Md(n)), s) : t;
        }),
        (s.padding = function (t) {
          return arguments.length
            ? s.paddingInner(t).paddingOuter(t)
            : s.paddingInner();
        }),
        (s.paddingInner = function (t) {
          return arguments.length
            ? ((o = "function" == typeof t ? t : Td(+t)), s)
            : o;
        }),
        (s.paddingOuter = function (t) {
          return arguments.length
            ? s.paddingTop(t).paddingRight(t).paddingBottom(t).paddingLeft(t)
            : s.paddingTop();
        }),
        (s.paddingTop = function (t) {
          return arguments.length
            ? ((a = "function" == typeof t ? t : Td(+t)), s)
            : a;
        }),
        (s.paddingRight = function (t) {
          return arguments.length
            ? ((u = "function" == typeof t ? t : Td(+t)), s)
            : u;
        }),
        (s.paddingBottom = function (t) {
          return arguments.length
            ? ((c = "function" == typeof t ? t : Td(+t)), s)
            : c;
        }),
        (s.paddingLeft = function (t) {
          return arguments.length
            ? ((f = "function" == typeof t ? t : Td(+t)), s)
            : f;
        }),
        s
      );
    }),
    (t.treemapBinary = function (t, n, e, r, i) {
      var o,
        a,
        u = t.children,
        c = u.length,
        f = new Array(c + 1);
      for (f[0] = a = o = 0; o < c; ++o) f[o + 1] = a += u[o].value;
      !(function t(n, e, r, i, o, a, c) {
        if (n >= e - 1) {
          var s = u[n];
          return (s.x0 = i), (s.y0 = o), (s.x1 = a), void (s.y1 = c);
        }
        var l = f[n],
          h = r / 2 + l,
          d = n + 1,
          p = e - 1;
        for (; d < p; ) {
          var g = (d + p) >>> 1;
          f[g] < h ? (d = g + 1) : (p = g);
        }
        h - f[d - 1] < f[d] - h && n + 1 < d && --d;
        var y = f[d] - l,
          v = r - y;
        if (a - i > c - o) {
          var _ = r ? (i * v + a * y) / r : a;
          t(n, d, y, i, o, _, c), t(d, e, v, _, o, a, c);
        } else {
          var b = r ? (o * v + c * y) / r : c;
          t(n, d, y, i, o, a, b), t(d, e, v, i, b, a, c);
        }
      })(0, c, t.value, n, e, r, i);
    }),
    (t.treemapDice = Pd),
    (t.treemapResquarify = Gd),
    (t.treemapSlice = Ld),
    (t.treemapSliceDice = function (t, n, e, r, i) {
      (1 & t.depth ? Ld : Pd)(t, n, e, r, i);
    }),
    (t.treemapSquarify = Xd),
    (t.tsv = Hu),
    (t.tsvFormat = zu),
    (t.tsvFormatBody = Du),
    (t.tsvFormatRow = Ru),
    (t.tsvFormatRows = qu),
    (t.tsvFormatValue = Fu),
    (t.tsvParse = Cu),
    (t.tsvParseRows = Pu),
    (t.union = function (...t) {
      const n = new Set();
      for (const e of t) for (const t of e) n.add(t);
      return n;
    }),
    (t.utcDay = Ug),
    (t.utcDays = Bg),
    (t.utcFriday = Vg),
    (t.utcFridays = ty),
    (t.utcHour = Og),
    (t.utcHours = Ig),
    (t.utcMillisecond = Jp),
    (t.utcMilliseconds = tg),
    (t.utcMinute = Rg),
    (t.utcMinutes = Fg),
    (t.utcMonday = jg),
    (t.utcMondays = Zg),
    (t.utcMonth = ey),
    (t.utcMonths = ry),
    (t.utcSaturday = $g),
    (t.utcSaturdays = ny),
    (t.utcSecond = cg),
    (t.utcSeconds = fg),
    (t.utcSunday = Lg),
    (t.utcSundays = Wg),
    (t.utcThursday = Gg),
    (t.utcThursdays = Jg),
    (t.utcTickInterval = cy),
    (t.utcTicks = uy),
    (t.utcTuesday = Hg),
    (t.utcTuesdays = Kg),
    (t.utcWednesday = Xg),
    (t.utcWednesdays = Qg),
    (t.utcWeek = Lg),
    (t.utcWeeks = Wg),
    (t.utcYear = iy),
    (t.utcYears = oy),
    (t.variance = h),
    (t.version = "7.0.0"),
    (t.window = Qt),
    (t.xml = Vu),
    (t.zip = function () {
      return rt(arguments);
    }),
    (t.zoom = function () {
      var t,
        n,
        e,
        r = vx,
        i = _x,
        o = wx,
        a = mx,
        u = xx,
        c = [0, 1 / 0],
        f = [
          [-1 / 0, -1 / 0],
          [1 / 0, 1 / 0],
        ],
        s = 250,
        l = Ir,
        h = yt("start", "zoom", "end"),
        d = 500,
        p = 0,
        g = 10;
      function y(t) {
        t.property("__zoom", bx)
          .on("wheel.zoom", M, { passive: !1 })
          .on("mousedown.zoom", A)
          .on("dblclick.zoom", T)
          .filter(u)
          .on("touchstart.zoom", S)
          .on("touchmove.zoom", E)
          .on("touchend.zoom touchcancel.zoom", k)
          .style("-webkit-tap-highlight-color", "rgba(0,0,0,0)");
      }
      function v(t, n) {
        return (n = Math.max(c[0], Math.min(c[1], n))) === t.k
          ? t
          : new hx(n, t.x, t.y);
      }
      function _(t, n, e) {
        var r = n[0] - e[0] * t.k,
          i = n[1] - e[1] * t.k;
        return r === t.x && i === t.y ? t : new hx(t.k, r, i);
      }
      function b(t) {
        return [(+t[0][0] + +t[1][0]) / 2, (+t[0][1] + +t[1][1]) / 2];
      }
      function m(t, n, e, r) {
        t.on("start.zoom", function () {
          x(this, arguments).event(r).start();
        })
          .on("interrupt.zoom end.zoom", function () {
            x(this, arguments).event(r).end();
          })
          .tween("zoom", function () {
            var t = this,
              o = arguments,
              a = x(t, o).event(r),
              u = i.apply(t, o),
              c = null == e ? b(u) : "function" == typeof e ? e.apply(t, o) : e,
              f = Math.max(u[1][0] - u[0][0], u[1][1] - u[0][1]),
              s = t.__zoom,
              h = "function" == typeof n ? n.apply(t, o) : n,
              d = l(s.invert(c).concat(f / s.k), h.invert(c).concat(f / h.k));
            return function (t) {
              if (1 === t) t = h;
              else {
                var n = d(t),
                  e = f / n[2];
                t = new hx(e, c[0] - n[0] * e, c[1] - n[1] * e);
              }
              a.zoom(null, t);
            };
          });
      }
      function x(t, n, e) {
        return (!e && t.__zooming) || new w(t, n);
      }
      function w(t, n) {
        (this.that = t),
          (this.args = n),
          (this.active = 0),
          (this.sourceEvent = null),
          (this.extent = i.apply(t, n)),
          (this.taps = 0);
      }
      function M(t, ...n) {
        if (r.apply(this, arguments)) {
          var e = x(this, n).event(t),
            i = this.__zoom,
            u = Math.max(
              c[0],
              Math.min(c[1], i.k * Math.pow(2, a.apply(this, arguments)))
            ),
            s = Yn(t);
          if (e.wheel)
            (e.mouse[0][0] === s[0] && e.mouse[0][1] === s[1]) ||
              (e.mouse[1] = i.invert((e.mouse[0] = s))),
              clearTimeout(e.wheel);
          else {
            if (i.k === u) return;
            (e.mouse = [s, i.invert(s)]), mi(this), e.start();
          }
          yx(t),
            (e.wheel = setTimeout(l, 150)),
            e.zoom("mouse", o(_(v(i, u), e.mouse[0], e.mouse[1]), e.extent, f));
        }
        function l() {
          (e.wheel = null), e.end();
        }
      }
      function A(t, ...n) {
        if (!e && r.apply(this, arguments)) {
          var i = t.currentTarget,
            a = x(this, n, !0).event(t),
            u = Fn(t.view)
              .on("mousemove.zoom", h, !0)
              .on("mouseup.zoom", d, !0),
            c = Yn(t, i),
            s = t.clientX,
            l = t.clientY;
          Gn(t.view),
            gx(t),
            (a.mouse = [c, this.__zoom.invert(c)]),
            mi(this),
            a.start();
        }
        function h(t) {
          if ((yx(t), !a.moved)) {
            var n = t.clientX - s,
              e = t.clientY - l;
            a.moved = n * n + e * e > p;
          }
          a.event(t).zoom(
            "mouse",
            o(
              _(a.that.__zoom, (a.mouse[0] = Yn(t, i)), a.mouse[1]),
              a.extent,
              f
            )
          );
        }
        function d(t) {
          u.on("mousemove.zoom mouseup.zoom", null),
            Vn(t.view, a.moved),
            yx(t),
            a.event(t).end();
        }
      }
      function T(t, ...n) {
        if (r.apply(this, arguments)) {
          var e = this.__zoom,
            a = Yn(t.changedTouches ? t.changedTouches[0] : t, this),
            u = e.invert(a),
            c = e.k * (t.shiftKey ? 0.5 : 2),
            l = o(_(v(e, c), a, u), i.apply(this, n), f);
          yx(t),
            s > 0
              ? Fn(this).transition().duration(s).call(m, l, a, t)
              : Fn(this).call(y.transform, l, a, t);
        }
      }
      function S(e, ...i) {
        if (r.apply(this, arguments)) {
          var o,
            a,
            u,
            c,
            f = e.touches,
            s = f.length,
            l = x(this, i, e.changedTouches.length === s).event(e);
          for (gx(e), a = 0; a < s; ++a)
            (c = [
              (c = Yn((u = f[a]), this)),
              this.__zoom.invert(c),
              u.identifier,
            ]),
              l.touch0
                ? l.touch1 ||
                  l.touch0[2] === c[2] ||
                  ((l.touch1 = c), (l.taps = 0))
                : ((l.touch0 = c), (o = !0), (l.taps = 1 + !!t));
          t && (t = clearTimeout(t)),
            o &&
              (l.taps < 2 &&
                ((n = c[0]),
                (t = setTimeout(function () {
                  t = null;
                }, d))),
              mi(this),
              l.start());
        }
      }
      function E(t, ...n) {
        if (this.__zooming) {
          var e,
            r,
            i,
            a,
            u = x(this, n).event(t),
            c = t.changedTouches,
            s = c.length;
          for (yx(t), e = 0; e < s; ++e)
            (i = Yn((r = c[e]), this)),
              u.touch0 && u.touch0[2] === r.identifier
                ? (u.touch0[0] = i)
                : u.touch1 && u.touch1[2] === r.identifier && (u.touch1[0] = i);
          if (((r = u.that.__zoom), u.touch1)) {
            var l = u.touch0[0],
              h = u.touch0[1],
              d = u.touch1[0],
              p = u.touch1[1],
              g = (g = d[0] - l[0]) * g + (g = d[1] - l[1]) * g,
              y = (y = p[0] - h[0]) * y + (y = p[1] - h[1]) * y;
            (r = v(r, Math.sqrt(g / y))),
              (i = [(l[0] + d[0]) / 2, (l[1] + d[1]) / 2]),
              (a = [(h[0] + p[0]) / 2, (h[1] + p[1]) / 2]);
          } else {
            if (!u.touch0) return;
            (i = u.touch0[0]), (a = u.touch0[1]);
          }
          u.zoom("touch", o(_(r, i, a), u.extent, f));
        }
      }
      function k(t, ...r) {
        if (this.__zooming) {
          var i,
            o,
            a = x(this, r).event(t),
            u = t.changedTouches,
            c = u.length;
          for (
            gx(t),
              e && clearTimeout(e),
              e = setTimeout(function () {
                e = null;
              }, d),
              i = 0;
            i < c;
            ++i
          )
            (o = u[i]),
              a.touch0 && a.touch0[2] === o.identifier
                ? delete a.touch0
                : a.touch1 && a.touch1[2] === o.identifier && delete a.touch1;
          if (
            (a.touch1 && !a.touch0 && ((a.touch0 = a.touch1), delete a.touch1),
            a.touch0)
          )
            a.touch0[1] = this.__zoom.invert(a.touch0[0]);
          else if (
            (a.end(),
            2 === a.taps &&
              ((o = Yn(o, this)), Math.hypot(n[0] - o[0], n[1] - o[1]) < g))
          ) {
            var f = Fn(this).on("dblclick.zoom");
            f && f.apply(this, arguments);
          }
        }
      }
      return (
        (y.transform = function (t, n, e, r) {
          var i = t.selection ? t.selection() : t;
          i.property("__zoom", bx),
            t !== i
              ? m(t, n, e, r)
              : i.interrupt().each(function () {
                  x(this, arguments)
                    .event(r)
                    .start()
                    .zoom(
                      null,
                      "function" == typeof n ? n.apply(this, arguments) : n
                    )
                    .end();
                });
        }),
        (y.scaleBy = function (t, n, e, r) {
          y.scaleTo(
            t,
            function () {
              var t = this.__zoom.k,
                e = "function" == typeof n ? n.apply(this, arguments) : n;
              return t * e;
            },
            e,
            r
          );
        }),
        (y.scaleTo = function (t, n, e, r) {
          y.transform(
            t,
            function () {
              var t = i.apply(this, arguments),
                r = this.__zoom,
                a =
                  null == e
                    ? b(t)
                    : "function" == typeof e
                    ? e.apply(this, arguments)
                    : e,
                u = r.invert(a),
                c = "function" == typeof n ? n.apply(this, arguments) : n;
              return o(_(v(r, c), a, u), t, f);
            },
            e,
            r
          );
        }),
        (y.translateBy = function (t, n, e, r) {
          y.transform(
            t,
            function () {
              return o(
                this.__zoom.translate(
                  "function" == typeof n ? n.apply(this, arguments) : n,
                  "function" == typeof e ? e.apply(this, arguments) : e
                ),
                i.apply(this, arguments),
                f
              );
            },
            null,
            r
          );
        }),
        (y.translateTo = function (t, n, e, r, a) {
          y.transform(
            t,
            function () {
              var t = i.apply(this, arguments),
                a = this.__zoom,
                u =
                  null == r
                    ? b(t)
                    : "function" == typeof r
                    ? r.apply(this, arguments)
                    : r;
              return o(
                dx
                  .translate(u[0], u[1])
                  .scale(a.k)
                  .translate(
                    "function" == typeof n ? -n.apply(this, arguments) : -n,
                    "function" == typeof e ? -e.apply(this, arguments) : -e
                  ),
                t,
                f
              );
            },
            r,
            a
          );
        }),
        (w.prototype = {
          event: function (t) {
            return t && (this.sourceEvent = t), this;
          },
          start: function () {
            return (
              1 == ++this.active &&
                ((this.that.__zooming = this), this.emit("start")),
              this
            );
          },
          zoom: function (t, n) {
            return (
              this.mouse &&
                "mouse" !== t &&
                (this.mouse[1] = n.invert(this.mouse[0])),
              this.touch0 &&
                "touch" !== t &&
                (this.touch0[1] = n.invert(this.touch0[0])),
              this.touch1 &&
                "touch" !== t &&
                (this.touch1[1] = n.invert(this.touch1[0])),
              (this.that.__zoom = n),
              this.emit("zoom"),
              this
            );
          },
          end: function () {
            return (
              0 == --this.active &&
                (delete this.that.__zooming, this.emit("end")),
              this
            );
          },
          emit: function (t) {
            var n = Fn(this.that).datum();
            h.call(
              t,
              this.that,
              new lx(t, {
                sourceEvent: this.sourceEvent,
                target: y,
                type: t,
                transform: this.that.__zoom,
                dispatch: h,
              }),
              n
            );
          },
        }),
        (y.wheelDelta = function (t) {
          return arguments.length
            ? ((a = "function" == typeof t ? t : sx(+t)), y)
            : a;
        }),
        (y.filter = function (t) {
          return arguments.length
            ? ((r = "function" == typeof t ? t : sx(!!t)), y)
            : r;
        }),
        (y.touchable = function (t) {
          return arguments.length
            ? ((u = "function" == typeof t ? t : sx(!!t)), y)
            : u;
        }),
        (y.extent = function (t) {
          return arguments.length
            ? ((i =
                "function" == typeof t
                  ? t
                  : sx([
                      [+t[0][0], +t[0][1]],
                      [+t[1][0], +t[1][1]],
                    ])),
              y)
            : i;
        }),
        (y.scaleExtent = function (t) {
          return arguments.length
            ? ((c[0] = +t[0]), (c[1] = +t[1]), y)
            : [c[0], c[1]];
        }),
        (y.translateExtent = function (t) {
          return arguments.length
            ? ((f[0][0] = +t[0][0]),
              (f[1][0] = +t[1][0]),
              (f[0][1] = +t[0][1]),
              (f[1][1] = +t[1][1]),
              y)
            : [
                [f[0][0], f[0][1]],
                [f[1][0], f[1][1]],
              ];
        }),
        (y.constrain = function (t) {
          return arguments.length ? ((o = t), y) : o;
        }),
        (y.duration = function (t) {
          return arguments.length ? ((s = +t), y) : s;
        }),
        (y.interpolate = function (t) {
          return arguments.length ? ((l = t), y) : l;
        }),
        (y.on = function () {
          var t = h.on.apply(h, arguments);
          return t === h ? y : t;
        }),
        (y.clickDistance = function (t) {
          return arguments.length ? ((p = (t = +t) * t), y) : Math.sqrt(p);
        }),
        (y.tapDistance = function (t) {
          return arguments.length ? ((g = +t), y) : g;
        }),
        y
      );
    }),
    (t.zoomIdentity = dx),
    (t.zoomTransform = px),
    Object.defineProperty(t, "__esModule", { value: !0 });
});
